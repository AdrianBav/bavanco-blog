<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class TrafficServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Check if the page has already been visited in this session
        if (session()->has('visited') && session('visited') === true) {
            return false;
        }

        // Record the visit
        $url = 'https://traffic.bavanco.local/api/v1/visits';

        $fields = array(
            'site_slug'  => 'blog',
            'ip_address' => request('ip_address'),
            'user_agent' => request('user_agent'),
        );

        $this->record_visit($url, $fields);

        // Remember that this page has been visited in this session
        session(['visited' => true]);
    }

    /**
     * POST the data to the API.
     *
     * @param   string  $url
     * @param   array   $fields
     * @return  boolean
     */
    private function record_visit($url, $fields)
    {
        // URL-ify the data for the POST
        $fields_string = '';
        foreach ($fields as $key => $value)
        {
            $fields_string .= $key . '=' . $value . '&';
        }
        rtrim($fields_string, '&');

        // Use PHP's cURL module to post to the API
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($ch);

        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $error = curl_error($ch);

        if ($result === false || $http_code !== 200) {
            \Log::info('Failed to record site visit.');
            \Log::info($this->generateMessage($http_code, $error));
        }

        curl_close($ch);

        return $result;
    }

    /**
     * Generate cURL error message.
     *
     * @param   string  $http_code
     * @param   string  $error
     * @return  string
     */
    private function generateMessage($http_code, $error)
    {
        $message = "Unexpected HTTP code: {$http_code}";

        if ($error) {
            $message .= PHP_EOL;
            $message .= $error;
        }

        return $message;
    }
}
