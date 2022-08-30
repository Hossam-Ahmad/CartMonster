<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IsyolSetting;
use Artisan;

class IsyolSettingsController extends Controller
{
    public function general_setting(Request $request)
    {
        return view('backend.setup_configurations.general_settings');
    }

    public function activation(Request $request)
    {
        return view('backend.setup_configurations.activation');
    }

    public function social_login(Request $request)
    {
        return view('backend.setup_configurations.social_login');
    }

    public function smtp_settings(Request $request)
    {
        return view('backend.setup_configurations.smtp_settings');
    }

    public function google_analytics(Request $request)
    {
        return view('backend.setup_configurations.google_configuration.google_analytics');
    }

    public function google_recaptcha(Request $request)
    {
        return view('backend.setup_configurations.google_configuration.google_recaptcha');
    }

    public function google_map(Request $request)
    {
        return view('backend.setup_configurations.google_configuration.google_map');
    }

    public function google_firebase(Request $request)
    {
        return view('backend.setup_configurations.google_configuration.google_firebase');
    }

    public function facebook_chat(Request $request)
    {
        return view('backend.setup_configurations.facebook_chat');
    }

    public function facebook_comment(Request $request)
    {
        return view('backend.setup_configurations.facebook_configuration.facebook_comment');
    }

    public function payment_method(Request $request)
    {
        return view('backend.setup_configurations.payment_method');
    }

    public function file_system(Request $request)
    {
        return view('backend.setup_configurations.file_system');
    }

    /**
     * Update the API key's for payment methods.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function payment_method_update(Request $request)
    {
        foreach ($request->types as $key => $type) {
            $this->overWriteEnvFile($type, $request[$type]);
        }

        $isyol_settings = IsyolSetting::where('type', $request->payment_method . '_sandbox')->first();
        if ($isyol_settings != null) {
            if ($request->has($request->payment_method . '_sandbox')) {
                $isyol_settings->value = 1;
                $isyol_settings->save();
            } else {
                $isyol_settings->value = 0;
                $isyol_settings->save();
            }
        }

        Artisan::call('cache:clear');

        flash(translate("Settings updated successfully"))->success();
        return back();
    }

    /**
     * Update the API key's for GOOGLE analytics.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function google_analytics_update(Request $request)
    {
        foreach ($request->types as $key => $type) {
            $this->overWriteEnvFile($type, $request[$type]);
        }

        $isyol_settings = IsyolSetting::where('type', 'google_analytics')->first();

        if ($request->has('google_analytics')) {
            $isyol_settings->value = 1;
            $isyol_settings->save();
        } else {
            $isyol_settings->value = 0;
            $isyol_settings->save();
        }

        Artisan::call('cache:clear');

        flash(translate("Settings updated successfully"))->success();
        return back();
    }

    public function google_recaptcha_update(Request $request)
    {
        foreach ($request->types as $key => $type) {
            $this->overWriteEnvFile($type, $request[$type]);
        }

        $isyol_settings = IsyolSetting::where('type', 'google_recaptcha')->first();

        if ($request->has('google_recaptcha')) {
            $isyol_settings->value = 1;
            $isyol_settings->save();
        } else {
            $isyol_settings->value = 0;
            $isyol_settings->save();
        }

        Artisan::call('cache:clear');

        flash(translate("Settings updated successfully"))->success();
        return back();
    }

    public function google_map_update(Request $request)
    {
        foreach ($request->types as $key => $type) {
            $this->overWriteEnvFile($type, $request[$type]);
        }

        $isyol_settings = IsyolSetting::where('type', 'google_map')->first();

        if ($request->has('google_map')) {
            $isyol_settings->value = 1;
            $isyol_settings->save();
        } else {
            $isyol_settings->value = 0;
            $isyol_settings->save();
        }

        Artisan::call('cache:clear');

        flash(translate("Settings updated successfully"))->success();
        return back();
    }

    public function google_firebase_update(Request $request)
    {
        foreach ($request->types as $key => $type) {
            $this->overWriteEnvFile($type, $request[$type]);
        }

        $isyol_settings = IsyolSetting::where('type', 'google_firebase')->first();

        if ($request->has('google_firebase')) {
            $isyol_settings->value = 1;
            $isyol_settings->save();
        } else {
            $isyol_settings->value = 0;
            $isyol_settings->save();
        }

        Artisan::call('cache:clear');

        flash(translate("Settings updated successfully"))->success();
        return back();
    }


    /**
     * Update the API key's for GOOGLE analytics.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function facebook_chat_update(Request $request)
    {
        foreach ($request->types as $key => $type) {
            $this->overWriteEnvFile($type, $request[$type]);
        }

        $isyol_settings = IsyolSetting::where('type', 'facebook_chat')->first();

        if ($request->has('facebook_chat')) {
            $isyol_settings->value = 1;
            $isyol_settings->save();
        } else {
            $isyol_settings->value = 0;
            $isyol_settings->save();
        }

        Artisan::call('cache:clear');

        flash(translate("Settings updated successfully"))->success();
        return back();
    }

    public function facebook_comment_update(Request $request)
    {
        foreach ($request->types as $key => $type) {
            $this->overWriteEnvFile($type, $request[$type]);
        }

        $isyol_settings = IsyolSetting::where('type', 'facebook_comment')->first();
        if (!$isyol_settings) {
            $isyol_settings = new IsyolSetting;
            $isyol_settings->type = 'facebook_comment';
        }

        $isyol_settings->value = 0;
        if ($request->facebook_comment) {
            $isyol_settings->value = 1;
        }

        $isyol_settings->save();

        Artisan::call('cache:clear');

        flash(translate("Settings updated successfully"))->success();
        return back();
    }

    public function facebook_pixel_update(Request $request)
    {
        foreach ($request->types as $key => $type) {
            $this->overWriteEnvFile($type, $request[$type]);
        }

        $isyol_settings = IsyolSetting::where('type', 'facebook_pixel')->first();

        if ($request->has('facebook_pixel')) {
            $isyol_settings->value = 1;
            $isyol_settings->save();
        } else {
            $isyol_settings->value = 0;
            $isyol_settings->save();
        }

        Artisan::call('cache:clear');

        flash(translate("Settings updated successfully"))->success();
        return back();
    }

    /**
     * Update the API key's for other methods.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function env_key_update(Request $request)
    {
        foreach ($request->types as $key => $type) {
            $this->overWriteEnvFile($type, $request[$type]);
        }

        flash(translate("Settings updated successfully"))->success();
        return back();
    }

    /**
     * overWrite the Env File values.
     * @param  String type
     * @param  String value
     * @return \Illuminate\Http\Response
     */
    public function overWriteEnvFile($type, $val)
    {
        if (env('DEMO_MODE') != 'On') {
            $path = base_path('.env');
            if (file_exists($path)) {
                $val = '"' . trim($val) . '"';
                if (is_numeric(strpos(file_get_contents($path), $type)) && strpos(file_get_contents($path), $type) >= 0) {
                    file_put_contents($path, str_replace(
                        $type . '="' . env($type) . '"',
                        $type . '=' . $val,
                        file_get_contents($path)
                    ));
                } else {
                    file_put_contents($path, file_get_contents($path) . "\r\n" . $type . '=' . $val);
                }
            }
        }
    }

    public function seller_verification_form(Request $request)
    {
        return view('backend.sellers.seller_verification_form.index');
    }

    /**
     * Update sell verification form.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function seller_verification_form_update(Request $request)
    {
        $form = array();
        $select_types = ['select', 'multi_select', 'radio'];
        $j = 0;
        for ($i = 0; $i < count($request->type); $i++) {
            $item['type'] = $request->type[$i];
            $item['label'] = $request->label[$i];
            if (in_array($request->type[$i], $select_types)) {
                $item['options'] = json_encode($request['options_' . $request->option[$j]]);
                $j++;
            }
            array_push($form, $item);
        }
        $isyol_settings = IsyolSetting::where('type', 'verification_form')->first();
        $isyol_settings->value = json_encode($form);
        if ($isyol_settings->save()) {
            Artisan::call('cache:clear');

            flash(translate("Verification form updated successfully"))->success();
            return back();
        }
    }

    public function update(Request $request)
    {

        foreach ($request->types as $key => $type) {
            if ($type == 'site_name') {
                $this->overWriteEnvFile('APP_NAME', $request[$type]);
            }
            if ($type == 'timezone') {
                $this->overWriteEnvFile('APP_TIMEZONE', $request[$type]);
            } else {
                $lang = null;
                if (gettype($type) == 'array') {
                    $lang = array_key_first($type);
                    $type = $type[$lang];
                    $isyol_settings = IsyolSetting::where('type', $type)->where('lang', $lang)->first();
                } else {
                    $isyol_settings = IsyolSetting::where('type', $type)->first();
                }

                if ($isyol_settings != null) {
                    if (gettype($request[$type]) == 'array') {
                        $isyol_settings->value = json_encode($request[$type]);
                    } else {
                        $isyol_settings->value = $request[$type];
                    }
                    $isyol_settings->lang = $lang;
                    $isyol_settings->save();
                } else {
                    $isyol_settings = new IsyolSetting;
                    $isyol_settings->type = $type;
                    if (gettype($request[$type]) == 'array') {
                        $isyol_settings->value = json_encode($request[$type]);
                    } else {
                        $isyol_settings->value = $request[$type];
                    }
                    $isyol_settings->lang = $lang;
                    $isyol_settings->save();
                }
            }
        }

        Artisan::call('cache:clear');

        flash(translate("Settings updated successfully"))->success();
        return back();
    }

    public function updateActivationSettings(Request $request)
    {
        $env_changes = ['FORCE_HTTPS', 'FILESYSTEM_DRIVER'];
        if (in_array($request->type, $env_changes)) {

            return $this->updateActivationSettingsInEnv($request);
        }

        $isyol_settings = IsyolSetting::where('type', $request->type)->first();
        if ($isyol_settings != null) {
            if ($request->type == 'maintenance_mode' && $request->value == '1') {
                if (env('DEMO_MODE') != 'On') {
                    Artisan::call('down');
                }
            } elseif ($request->type == 'maintenance_mode' && $request->value == '0') {
                if (env('DEMO_MODE') != 'On') {
                    Artisan::call('up');
                }
            }
            $isyol_settings->value = $request->value;
            $isyol_settings->save();
        } else {
            $isyol_settings = new IsyolSetting;
            $isyol_settings->type = $request->type;
            $isyol_settings->value = $request->value;
            $isyol_settings->save();
        }

        Artisan::call('cache:clear');
        return '1';
    }

    public function updateActivationSettingsInEnv($request)
    {
        if ($request->type == 'FORCE_HTTPS' && $request->value == '1') {
            $this->overWriteEnvFile($request->type, 'On');

            if (strpos(env('APP_URL'), 'http:') !== FALSE) {
                $this->overWriteEnvFile('APP_URL', str_replace("http:", "https:", env('APP_URL')));
            }
        } elseif ($request->type == 'FORCE_HTTPS' && $request->value == '0') {
            $this->overWriteEnvFile($request->type, 'Off');
            if (strpos(env('APP_URL'), 'https:') !== FALSE) {
                $this->overWriteEnvFile('APP_URL', str_replace("https:", "http:", env('APP_URL')));
            }
        } elseif ($request->type == 'FILESYSTEM_DRIVER' && $request->value == '1') {
            $this->overWriteEnvFile($request->type, 's3');
        } elseif ($request->type == 'FILESYSTEM_DRIVER' && $request->value == '0') {
            $this->overWriteEnvFile($request->type, 'local');
        }

        return '1';
    }

    public function vendor_commission(Request $request)
    {
        return view('backend.sellers.seller_commission.index');
    }

    public function vendor_commission_update(Request $request)
    {
        foreach ($request->types as $key => $type) {
            $isyol_settings = IsyolSetting::where('type', $type)->first();
            if ($isyol_settings != null) {
                $isyol_settings->value = $request[$type];
                $isyol_settings->save();
            } else {
                $isyol_settings = new IsyolSetting;
                $isyol_settings->type = $type;
                $isyol_settings->value = $request[$type];
                $isyol_settings->save();
            }
        }

        Artisan::call('cache:clear');

        flash(translate('Seller Commission updated successfully'))->success();
        return back();
    }

    public function shipping_configuration(Request $request)
    {
        return view('backend.setup_configurations.shipping_configuration.index');
    }

    public function shipping_configuration_update(Request $request)
    {
        $isyol_settings = IsyolSetting::where('type', $request->type)->first();
        $isyol_settings->value = $request[$request->type];
        $isyol_settings->save();

        Artisan::call('cache:clear');
        return back();
    }

    public function order_configuration()
    {
        return view('backend.setup_configurations.order_configuration.index');
    }
}
