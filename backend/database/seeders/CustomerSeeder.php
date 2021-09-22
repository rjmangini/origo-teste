<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert(
            [
                [
                    "nome" => "Claudianus Boast",
                    "email" => "cboast0@fastcompany.com",
                    "fone" => "(19) 957645371",
                    "estado" => "São Paulo",
                    "cidade" => "Araraquara",
                    "nascimento" => "1993-06-07"
                ],
                [
                    "nome" => "Loni Jennions",
                    "email" => "ljennions1@va.gov",
                    "fone" => "(19) 905613161",
                    "estado" => "São Paulo",
                    "cidade" => "Limeira",
                    "nascimento" => "1985-05-09"
                ],
                [
                    "nome" => "Margi Gilhouley",
                    "email" => "mgilhouley2@telegraph.co.uk",
                    "fone" => "(19) 966290104",
                    "estado" => "São Paulo",
                    "cidade" => "Araraquara",
                    "nascimento" => "1984-09-13"
                ],
                [
                    "nome" => "Lexy Sprulls",
                    "email" => "lsprulls3@moonfruit.com",
                    "fone" => "(19) 976121601",
                    "estado" => "São Paulo",
                    "cidade" => "Rio Claro",
                    "nascimento" => "1999-10-19"
                ],
                [
                    "nome" => "Marie Shatliff",
                    "email" => "mshatliff4@cbslocal.com",
                    "fone" => "(19) 991376354",
                    "estado" => "São Paulo",
                    "cidade" => "Rio Claro",
                    "nascimento" => "1990-07-20"
                ],
                [
                    "nome" => "Graig Mouncey",
                    "email" => "gmouncey5@so-net.ne.jp",
                    "fone" => "(19) 941806149",
                    "estado" => "São Paulo",
                    "cidade" => "Araraquara",
                    "nascimento" => "1990-03-27"
                ],
                [
                    "nome" => "Laurice Liger",
                    "email" => "lliger0@php.net",
                    "fone" => "(35) 971740954",
                    "estado" => "Minas Gerais",
                    "cidade" => "Areado",
                    "nascimento" => "1992-10-25"
                ],
                [
                    "nome" => "Kendrick Sooper",
                    "email" => "ksooper1@slate.com",
                    "fone" => "(31) 944324086",
                    "estado" => "Minas Gerais",
                    "cidade" => "Belo Horizonte",
                    "nascimento" => "1981-06-02"
                ],
                [
                    "nome" => "Gordon Levington",
                    "email" => "glevington2@hpost.com",
                    "fone" => "(31) 922405868",
                    "estado" => "Minas Gerais",
                    "cidade" => "Belo Horizonte",
                    "nascimento" => "1993-11-25"
                ],
                [
                    "nome" => "Noam Scolland",
                    "email" => "nscolland3@mozilla.org",
                    "fone" => "(35) 996817669",
                    "estado" => "Minas Gerais",
                    "cidade" => "Areado",
                    "nascimento" => "1999-12-31"
                ],
                [
                    "nome" => "Lindon Skehens",
                    "email" => "lskehens4@npr.org",
                    "fone" => "(35) 967671104",
                    "estado" => "Minas Gerais",
                    "cidade" => "Areado",
                    "nascimento" => "1985-01-10"
                ],
                [
                    "nome" => "Kimbra Rase",
                    "email" => "krase5@topsy.com",
                    "fone" => "(35) 999428030",
                    "estado" => "Minas Gerais",
                    "cidade" => "Areado",
                    "nascimento" => "1999-05-05"
                ],
                [
                    "nome" => "Lorenzo Fisk",
                    "email" => "lfisk6@businessweek.com",
                    "fone" => "(31) 912695467",
                    "estado" => "Minas Gerais",
                    "cidade" => "Belo Horizonte",
                    "nascimento" => "1985-12-22"
                ],
                [
                    "nome" => "Bourke Flavelle",
                    "email" => "bflavelle7@fc2.com",
                    "fone" => "(35) 959386145",
                    "estado" => "Minas Gerais",
                    "cidade" => "Itapeva",
                    "nascimento" => "1984-04-10"
                ],
                [
                    "nome" => "Curran McSharry",
                    "email" => "cmcsharry8@webeden.co.uk",
                    "fone" => "(35) 902916131",
                    "estado" => "Minas Gerais",
                    "cidade" => "Itapeva",
                    "nascimento" => "1983-01-15"
                ],
                [
                    "nome" => "Aveline Dowtry",
                    "email" => "adowtry9@miibeian.gov.cn",
                    "fone" => "(31) 945227500",
                    "estado" => "Minas Gerais",
                    "cidade" => "Belo Horizonte",
                    "nascimento" => "1994-12-23"
                ],
                [
                    "nome" => "John Sebastian",
                    "email" => "jsebastiana@cbslocal.com",
                    "fone" => "(31) 907366740",
                    "estado" => "Minas Gerais",
                    "cidade" => "Belo Horizonte",
                    "nascimento" => "1998-04-06"
                ],
                [
                    "nome" => "Reynolds Greenan",
                    "email" => "rgreenanb@bloomberg.com",
                    "fone" => "(35) 923551410",
                    "estado" => "Minas Gerais",
                    "cidade" => "Itapeva",
                    "nascimento" => "1985-07-19"
                ]
            ]
        );
    }
}
