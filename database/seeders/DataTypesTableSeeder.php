<?php

namespace Joy\VoyagerBreadEmail\Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataType;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'emails');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'emails',
                'display_name_singular' => __('joy-voyager-bread-email::seeders.data_types.email.singular'),
                'display_name_plural'   => __('joy-voyager-bread-email::seeders.data_types.email.plural'),
                'icon'                  => 'voyager-bread voyager-bread-email voyager-mail',
                'model_name'            => 'Joy\\VoyagerBreadEmail\\Models\\Email',
                // 'policy_name'           => 'Joy\\VoyagerBreadEmail\\Policies\\EmailPolicy',
                // 'controller'            => 'Joy\\VoyagerBreadEmail\\Http\\Controllers\\VoyagerBreadEmailController',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }
    }

    /**
     * [dataType description].
     *
     * @param [type] $field [description]
     * @param [type] $for   [description]
     *
     * @return [type] [description]
     */
    protected function dataType($field, $for)
    {
        return DataType::firstOrNew([$field => $for]);
    }
}
