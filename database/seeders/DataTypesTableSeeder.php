<?php

namespace Joy\VoyagerBreadLead\Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataType;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'leads');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'leads',
                'display_name_singular' => __('joy-voyager-bread-lead::seeders.data_types.lead.singular'),
                'display_name_plural'   => __('joy-voyager-bread-lead::seeders.data_types.lead.plural'),
                'icon'                  => 'voyager-bread voyager-bread-lead voyager-lightbulb',
                'model_name'            => 'Joy\\VoyagerBreadLead\\Models\\Lead',
                // 'policy_name'           => 'Joy\\VoyagerBreadLead\\Policies\\LeadPolicy',
                // 'controller'            => 'Joy\\VoyagerBreadLead\\Http\\Controllers\\VoyagerBreadLeadController',
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
