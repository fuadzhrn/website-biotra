<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PageContent;
use Illuminate\Http\Request;

class PartnershipContentController extends Controller
{
    public function index()
    {
        $records = PageContent::where('page', 'partnership')->get();

        $content = [];
        foreach ($records as $record) {
            $content[$record->section][$record->key] = $record;
        }

        return view('admin.contents.partnership', compact('content'));
    }

    public function update(Request $request)
    {
        $fields = [
            // Page Header
            'page_header_label'       => ['page_header', 'label'],
            'page_header_title'       => ['page_header', 'title'],
            'page_header_description' => ['page_header', 'description'],
            'page_header_note'        => ['page_header', 'note'],

            // Industry
            'industry_label'               => ['industry', 'label'],
            'industry_title'               => ['industry', 'title'],
            'industry_paragraph_1'         => ['industry', 'paragraph_1'],
            'industry_paragraph_2'         => ['industry', 'paragraph_2'],
            'industry_point_1'             => ['industry', 'point_1'],
            'industry_point_2'             => ['industry', 'point_2'],
            'industry_point_3'             => ['industry', 'point_3'],
            'industry_point_4'             => ['industry', 'point_4'],
            'industry_chart_1_label'       => ['industry', 'chart_1_label'],
            'industry_chart_1_title'       => ['industry', 'chart_1_title'],
            'industry_chart_1_description' => ['industry', 'chart_1_description'],
            'industry_chart_2_label'       => ['industry', 'chart_2_label'],
            'industry_chart_2_title'       => ['industry', 'chart_2_title'],
            'industry_chart_2_description' => ['industry', 'chart_2_description'],
            'industry_chart_note'          => ['industry', 'chart_note'],

            // Workflow
            'workflow_label'              => ['workflow', 'label'],
            'workflow_title'              => ['workflow', 'title'],
            'workflow_description'        => ['workflow', 'description'],
            'workflow_step_1_title'       => ['workflow', 'step_1_title'],
            'workflow_step_1_description' => ['workflow', 'step_1_description'],
            'workflow_step_2_title'       => ['workflow', 'step_2_title'],
            'workflow_step_2_description' => ['workflow', 'step_2_description'],
            'workflow_step_3_title'       => ['workflow', 'step_3_title'],
            'workflow_step_3_description' => ['workflow', 'step_3_description'],
            'workflow_step_4_title'       => ['workflow', 'step_4_title'],
            'workflow_step_4_description' => ['workflow', 'step_4_description'],
            'workflow_step_5_title'       => ['workflow', 'step_5_title'],
            'workflow_step_5_description' => ['workflow', 'step_5_description'],

            // Benefits
            'benefits_label'         => ['benefits', 'label'],
            'benefits_title'         => ['benefits', 'title'],
            'benefits_description'   => ['benefits', 'description'],
            'benefits_1_title'       => ['benefits', 'benefit_1_title'],
            'benefits_1_description' => ['benefits', 'benefit_1_description'],
            'benefits_2_title'       => ['benefits', 'benefit_2_title'],
            'benefits_2_description' => ['benefits', 'benefit_2_description'],
            'benefits_3_title'       => ['benefits', 'benefit_3_title'],
            'benefits_3_description' => ['benefits', 'benefit_3_description'],
            'benefits_4_title'       => ['benefits', 'benefit_4_title'],
            'benefits_4_description' => ['benefits', 'benefit_4_description'],
            'benefits_5_title'       => ['benefits', 'benefit_5_title'],
            'benefits_5_description' => ['benefits', 'benefit_5_description'],
            'benefits_6_title'       => ['benefits', 'benefit_6_title'],
            'benefits_6_description' => ['benefits', 'benefit_6_description'],
            'benefits_7_title'       => ['benefits', 'benefit_7_title'],
            'benefits_7_description' => ['benefits', 'benefit_7_description'],
            'benefits_8_title'       => ['benefits', 'benefit_8_title'],
            'benefits_8_description' => ['benefits', 'benefit_8_description'],

            // Pricing
            'pricing_label'                  => ['pricing', 'label'],
            'pricing_title'                  => ['pricing', 'title'],
            'pricing_description'            => ['pricing', 'description'],
            'pricing_promo_badge'            => ['pricing', 'promo_badge'],
            'pricing_normal_price_label'     => ['pricing', 'normal_price_label'],
            'pricing_normal_price'           => ['pricing', 'normal_price'],
            'pricing_normal_price_note'      => ['pricing', 'normal_price_note'],
            'pricing_discount_price_label'   => ['pricing', 'discount_price_label'],
            'pricing_discount_price'         => ['pricing', 'discount_price'],
            'pricing_discount_price_note'    => ['pricing', 'discount_price_note'],
            'pricing_special_label'          => ['pricing', 'special_label'],
            'pricing_special_price'          => ['pricing', 'special_price'],
            'pricing_special_description'    => ['pricing', 'special_description'],
            'pricing_benefit_title'          => ['pricing', 'benefit_title'],
            'pricing_benefit_description'    => ['pricing', 'benefit_description'],
            'pricing_benefit_1'              => ['pricing', 'benefit_1'],
            'pricing_benefit_2'              => ['pricing', 'benefit_2'],
            'pricing_benefit_3'              => ['pricing', 'benefit_3'],
            'pricing_benefit_4'              => ['pricing', 'benefit_4'],
            'pricing_main_button_text'       => ['pricing', 'main_button_text'],
            'pricing_main_button_link'       => ['pricing', 'main_button_link'],
            'pricing_secondary_button_text'  => ['pricing', 'secondary_button_text'],
            'pricing_secondary_button_link'  => ['pricing', 'secondary_button_link'],
            'pricing_note'                   => ['pricing', 'note'],

            // Simulation
            'simulation_label'                    => ['simulation', 'label'],
            'simulation_title'                    => ['simulation', 'title'],
            'simulation_description'              => ['simulation', 'description'],
            'simulation_property_title'           => ['simulation', 'property_title'],
            'simulation_property_rent_label'      => ['simulation', 'property_rent_label'],
            'simulation_property_rent_value'      => ['simulation', 'property_rent_value'],
            'simulation_property_duration_label'  => ['simulation', 'property_duration_label'],
            'simulation_property_duration_value'  => ['simulation', 'property_duration_value'],
            'simulation_property_total_label'     => ['simulation', 'property_total_label'],
            'simulation_property_total_value'     => ['simulation', 'property_total_value'],
            'simulation_property_share_label'     => ['simulation', 'property_share_label'],
            'simulation_property_share_value'     => ['simulation', 'property_share_value'],
            'simulation_property_result_label'    => ['simulation', 'property_result_label'],
            'simulation_property_result_value'    => ['simulation', 'property_result_value'],
            'simulation_rental_title'             => ['simulation', 'rental_title'],
            'simulation_rental_price_label'       => ['simulation', 'rental_price_label'],
            'simulation_rental_price_value'       => ['simulation', 'rental_price_value'],
            'simulation_rental_duration_label'    => ['simulation', 'rental_duration_label'],
            'simulation_rental_duration_value'    => ['simulation', 'rental_duration_value'],
            'simulation_rental_total_label'       => ['simulation', 'rental_total_label'],
            'simulation_rental_total_value'       => ['simulation', 'rental_total_value'],
            'simulation_rental_share_label'       => ['simulation', 'rental_share_label'],
            'simulation_rental_share_value'       => ['simulation', 'rental_share_value'],
            'simulation_rental_result_label'      => ['simulation', 'rental_result_label'],
            'simulation_rental_result_value'      => ['simulation', 'rental_result_value'],
            'simulation_highlight_label'          => ['simulation', 'highlight_label'],
            'simulation_highlight_monthly'        => ['simulation', 'highlight_monthly'],
            'simulation_highlight_period'         => ['simulation', 'highlight_period'],
            'simulation_highlight_total'          => ['simulation', 'highlight_total'],
            'simulation_highlight_description'    => ['simulation', 'highlight_description'],
            'simulation_disclaimer'               => ['simulation', 'disclaimer'],

            // CTA
            'cta_label'       => ['cta', 'label'],
            'cta_title'       => ['cta', 'title'],
            'cta_description' => ['cta', 'description'],
            'cta_button_text' => ['cta', 'button_text'],
            'cta_button_link' => ['cta', 'button_link'],
            'cta_note'        => ['cta', 'note'],
        ];

        foreach ($fields as $input => [$section, $key]) {
            $this->saveText($section, $key, $request->input($input));
        }

        return redirect()->back()->with('success', 'Konten halaman Kemitraan berhasil diperbarui.');
    }

    private function saveText(string $section, string $key, ?string $value): void
    {
        PageContent::updateOrCreate(
            ['page' => 'partnership', 'section' => $section, 'key' => $key],
            ['type' => 'text', 'value' => $value, 'is_active' => true]
        );
    }
}
