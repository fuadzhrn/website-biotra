<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PageContent;
use App\Models\ConsultationPromo;
use Illuminate\Http\Request;

class ContactContentController extends Controller
{
    public function index()
    {
        $records = PageContent::where('page', 'contact')->get();
        $content = [];
        foreach ($records as $record) {
            $content[$record->section][$record->key] = $record;
        }
        $promos = ConsultationPromo::orderBy('sort_order')->get();
        return view('admin.contents.contact', compact('content', 'promos'));
    }

    public function update(Request $request)
    {
        $fields = [
            // Page Header
            'page_header_label'           => ['page_header', 'label'],
            'page_header_title'           => ['page_header', 'title'],
            'page_header_description'     => ['page_header', 'description'],
            'page_header_note'            => ['page_header', 'note'],

            // Contact Info
            'contact_info_label'                 => ['contact_info', 'label'],
            'contact_info_title'                 => ['contact_info', 'title'],
            'contact_info_paragraph_1'           => ['contact_info', 'paragraph_1'],
            'contact_info_paragraph_2'           => ['contact_info', 'paragraph_2'],
            'contact_info_whatsapp_button_text'  => ['contact_info', 'whatsapp_button_text'],
            'contact_info_whatsapp_button_link'  => ['contact_info', 'whatsapp_button_link'],
            'contact_info_location_button_text'  => ['contact_info', 'location_button_text'],
            'contact_info_location_button_link'  => ['contact_info', 'location_button_link'],

            // Contact Panel
            'contact_panel_label'               => ['contact_panel', 'panel_label'],
            'contact_panel_title'               => ['contact_panel', 'panel_title'],
            'contact_panel_description'         => ['contact_panel', 'panel_description'],
            'contact_panel_whatsapp_title'      => ['contact_panel', 'whatsapp_title'],
            'contact_panel_whatsapp_value'      => ['contact_panel', 'whatsapp_value'],
            'contact_panel_whatsapp_description'=> ['contact_panel', 'whatsapp_description'],
            'contact_panel_email_title'         => ['contact_panel', 'email_title'],
            'contact_panel_email_value'         => ['contact_panel', 'email_value'],
            'contact_panel_email_description'   => ['contact_panel', 'email_description'],
            'contact_panel_hours_title'         => ['contact_panel', 'hours_title'],
            'contact_panel_hours_value'         => ['contact_panel', 'hours_value'],
            'contact_panel_hours_description'   => ['contact_panel', 'hours_description'],
            'contact_panel_location_title'      => ['contact_panel', 'location_title'],
            'contact_panel_location_value'      => ['contact_panel', 'location_value'],
            'contact_panel_location_description'=> ['contact_panel', 'location_description'],
            'contact_panel_note'                => ['contact_panel', 'note'],

            // Consultation Form
            'consultation_form_label'                  => ['consultation_form', 'label'],
            'consultation_form_title'                  => ['consultation_form', 'title'],
            'consultation_form_description'            => ['consultation_form', 'description'],
            'consultation_form_name_label'             => ['consultation_form', 'name_label'],
            'consultation_form_name_placeholder'       => ['consultation_form', 'name_placeholder'],
            'consultation_form_whatsapp_label'         => ['consultation_form', 'whatsapp_label'],
            'consultation_form_whatsapp_placeholder'   => ['consultation_form', 'whatsapp_placeholder'],
            'consultation_form_email_label'            => ['consultation_form', 'email_label'],
            'consultation_form_email_placeholder'      => ['consultation_form', 'email_placeholder'],
            'consultation_form_promo_title'            => ['consultation_form', 'promo_title'],
            'consultation_form_promo_description'     => ['consultation_form', 'promo_description'],
            'consultation_form_message_label'          => ['consultation_form', 'message_label'],
            'consultation_form_message_placeholder'    => ['consultation_form', 'message_placeholder'],
            'consultation_form_button_text'            => ['consultation_form', 'button_text'],
            'consultation_form_note'                   => ['consultation_form', 'note'],
            'consultation_form_whatsapp_target_number' => ['consultation_form', 'whatsapp_target_number'],

            // Quick Help
            'quick_help_label'           => ['quick_help', 'label'],
            'quick_help_title'           => ['quick_help', 'title'],
            'quick_help_description'     => ['quick_help', 'description'],
            'quick_help_item_1_title'    => ['quick_help', 'item_1_title'],
            'quick_help_item_1_description' => ['quick_help', 'item_1_description'],
            'quick_help_item_2_title'    => ['quick_help', 'item_2_title'],
            'quick_help_item_2_description' => ['quick_help', 'item_2_description'],
            'quick_help_item_3_title'    => ['quick_help', 'item_3_title'],
            'quick_help_item_3_description' => ['quick_help', 'item_3_description'],
            'quick_help_item_4_title'    => ['quick_help', 'item_4_title'],
            'quick_help_item_4_description' => ['quick_help', 'item_4_description'],
            'quick_help_note'            => ['quick_help', 'note'],

            // Location & Maps
            'location_map_label'           => ['location_map', 'label'],
            'location_map_title'           => ['location_map', 'title'],
            'location_map_description'     => ['location_map', 'description'],
            'location_map_address_label'   => ['location_map', 'address_label'],
            'location_map_address_title'   => ['location_map', 'address_title'],
            'location_map_address'         => ['location_map', 'address'],
            'location_map_service_hours'   => ['location_map', 'service_hours'],
            'location_map_visit_note'      => ['location_map', 'visit_note'],
            'location_map_maps_embed'      => ['location_map', 'maps_embed'],
            'location_map_maps_button_text'=> ['location_map', 'maps_button_text'],
            'location_map_maps_button_link'=> ['location_map', 'maps_button_link'],

            // FAQ
            'faq_label'              => ['faq', 'label'],
            'faq_title'              => ['faq', 'title'],
            'faq_description'        => ['faq', 'description'],
            'faq_intro_title'        => ['faq', 'intro_title'],
            'faq_intro_description'  => ['faq', 'intro_description'],
            'faq_intro_button_text'  => ['faq', 'intro_button_text'],
            'faq_intro_button_link'  => ['faq', 'intro_button_link'],
            'faq_1_question'         => ['faq', 'faq_1_question'],
            'faq_1_answer'           => ['faq', 'faq_1_answer'],
            'faq_2_question'         => ['faq', 'faq_2_question'],
            'faq_2_answer'           => ['faq', 'faq_2_answer'],
            'faq_3_question'         => ['faq', 'faq_3_question'],
            'faq_3_answer'           => ['faq', 'faq_3_answer'],
            'faq_4_question'         => ['faq', 'faq_4_question'],
            'faq_4_answer'           => ['faq', 'faq_4_answer'],
            'faq_5_question'         => ['faq', 'faq_5_question'],
            'faq_5_answer'           => ['faq', 'faq_5_answer'],

            // CTA
            'cta_label'        => ['cta', 'label'],
            'cta_title'        => ['cta', 'title'],
            'cta_description'  => ['cta', 'description'],
            'cta_button_text'  => ['cta', 'button_text'],
            'cta_button_link'  => ['cta', 'button_link'],
        ];

        foreach ($fields as $input => [$section, $key]) {
            $this->saveText($section, $key, $request->input($input));
        }

        $this->saveText('consultation_form', 'promo_is_active', $request->has('consultation_form_promo_is_active') ? '1' : '');

        return redirect()->back()->with('success', 'Konten halaman Kontak berhasil diperbarui.');
    }

    private function saveText(string $section, string $key, ?string $value): void
    {
        PageContent::updateOrCreate(
            ['page' => 'contact', 'section' => $section, 'key' => $key],
            ['type' => 'text', 'value' => $value, 'is_active' => true]
        );
    }
}
