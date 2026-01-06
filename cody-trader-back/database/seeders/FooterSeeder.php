<?php

namespace Database\Seeders;

use App\Models\Footer;
use Illuminate\Database\Seeder;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Footer::create([
            'brand_name' => 'Academia Cody Trader',
            'brand_description' => 'Formación profesional en mercados financieros. Metodología basada en datos y gestión de riesgo.',
            'contact_email' => 'contacto@academiacodytrader.com',
            'navigation_links' => [
                [
                    'label' => 'Metodología',
                    'url' => '#metodologia',
                ],
                [
                    'label' => 'Programa',
                    'url' => '#aprenderas',
                ],
                [
                    'label' => 'Credenciales',
                    'url' => '#autoridad',
                ],
            ],
            'social_links' => [
                [
                    'name' => 'Telegram',
                    'url' => 'https://t.me/',
                    'color' => '#229ED9',
                    'icon' => 'Send', // Lucide icon name
                    'active' => true,
                ],
                [
                    'name' => 'WhatsApp',
                    'url' => 'https://wa.me/',
                    'color' => '#25D366',
                    'icon' => 'MessageCircle',
                    'active' => true,
                ],
                [
                    'name' => 'Facebook',
                    'url' => 'https://facebook.com/',
                    'color' => '#1877F2',
                    'icon' => 'Facebook',
                    'active' => true,
                ],
                [
                    'name' => 'X (Twitter)',
                    'url' => 'https://x.com/',
                    'color' => '#000000',
                    'icon' => 'Twitter',
                    'active' => true,
                ],
                [
                    'name' => 'Instagram',
                    'url' => 'https://instagram.com/',
                    'color' => '#E4405F',
                    'icon' => 'Instagram',
                    'active' => true,
                ],
                [
                    'name' => 'LinkedIn',
                    'url' => 'https://linkedin.com/',
                    'color' => '#0077b5',
                    'icon' => 'Linkedin',
                    'active' => true,
                ],
                [
                    'name' => 'YouTube',
                    'url' => 'https://youtube.com/',
                    'color' => '#FF0000',
                    'icon' => 'Youtube',
                    'active' => true,
                ],
            ],
            'risk_disclaimer' => 'Aviso de riesgo: El trading en mercados financieros implica riesgos significativos de pérdida. Los resultados pasados no garantizan resultados futuros. Este programa es estrictamente educativo y no constituye asesoría de inversión. Opera únicamente con capital que puedas permitirte perder.',
            'copyright_text' => 'Academia Cody Trader. Todos los derechos reservados.',
        ]);
    }
}
