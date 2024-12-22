<?php

namespace App\Imports;

use App\Models\RiceData;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithStartRow;

class CsvImport implements ToModel, WithHeadingRow, WithStartRow
{
    public function startRow(): int
    {
        return 4; // Skip the first 3 rows
    }

    

    public function model(array $row)
    {


        $existingVariety = RiceData::where('variety_code', $row['variety_code'])->first();

        if ($existingVariety) {
            return null; 
        }
        
        $data=[
            'particulars'=>$row['particulars']??null,
            'variety_code'=>$row['variety_code']??null,
            'state'=>$row['state']??null,
            'country'=>$row['country']??null,
            'region'=>$row['region']??null,
            'special_group'=>$row['special_group']??null,

            
            'milling_properties'=>json_encode([
                'Hulling'=>$row['milling_properties']??null,
                'Milling'=>$row[8]??null,
                'HRR'=>$row[9]??null
            ]),
            
            'physical_properties'=>json_encode([
                'Length'=>$row['physical_properties']??null,
                'Breadth'=>$row[11]??null,
                'LB_ratio'=>$row[12]??null
            ]),
            'av_chalky_percent'=>$row[13]??null,

            'chemical_properties'=>json_encode([
                'Amylose'=>$row['chemical_properties']??null,
                'ASV_AVERAGE'=>$row[15]??null,
                'Gel_Consistency'=>$row[16]??null,
            ]),
           
            'texture_analyzer_mouth_feel'=>json_encode([
                'Hardness'=>$row['texture_analyzer_mouth_feel']??null,
                'Adhesiveness'=>$row[18]??null,
                'Springiness'=>$row[19]??null,
                'Cohesiveness'=>$row[20]??null,
                'Gumminess'=>$row[21]??null,
                'Chewiness'=>$row[22]??null,
                'Resilience'=>$row[23]??null,
            ]),
           
            'pasting_properties_rva_analysis'=>json_encode([
                'PEAK_VISCOSITY'=>$row['pasting_properties_rva_analysis']??null,
                'TROUGH_VISCOSITY'=>$row[25]??null,
                'BREAKDOWN_VISCOSITY'=>$row[26]??null,
                'FINAL_VISCOSITY'=>$row[27]??null,
                'SETBACK_VISCOSITY'=>$row[28]??null,
                'PEAK_TIME'=>$row[29]??null,
                'PASTING_TEM'=>$row[30]??null,
            ]),
           
           
            'cooking_properties'=>json_encode([
                'Kernel_length_after_cooking'=>$row['cooking_properties']??null,
                'Kernel_ breadth_after_ cooking'=>$row[32]??null,
                'Elongation_Ratio'=>$row[33]??null,
            ]),
           
           
            'aroma_ppb'=>$row['aroma_ppb']??null,
           
           
            'minerals_data'=>json_encode([
                'Mg_ppm_Brown_rice'=>$row['minerals_data']??null,
                'P_ppm_Brown_rice'=>$row[36]??null,
                'K_ppm_Brown_rice'=>$row[37]??null,
                'Mn_ppm_Brown_rice'=>$row[38]??null,
                'Fe_ppm_Brown_rice'=>$row[39]??null,
                'Co_ppm_Brown_rice'=>$row[40]??null,
                'Cu_ppm_Brown_rice'=>$row[41]??null,
                'Zn_ppm_Brown_rice'=>$row[42]??null,
                'As_ppm_Brown_rice'=>$row[43]??null,
                'Se_ppm_Brown_rice'=>$row[44]??null,
                'Mo_ppm_Brown_rice'=>$row[45]??null,
                'Cd_ppm_Brown_rice'=>$row[46]??null,
                'Pb_ppm_Brown_rice'=>$row[47]??null,
            ]),
           
           
            'gpc'=>json_encode([
                'AM1'=>$row['gpc']??null,
                'AM2'=>$row[49]??null,
                'MCAP'=>$row[50]??null,
                'SCAP'=>$row[51]??null,
                'SCAP1'=>$row[52]??null,
                'SCAP2'=>$row[53]??null,
                'SCAP3'=>$row[54]??null,
            ]),
           
           
            'gi'=>json_encode([
                'TS'=>$row['gi']??null,
                'TS_DWB'=>$row[56]??null,
                'GI'=>$row[57]??null,
            ]),
           
           
            'bioactives'=>json_encode([
                'Flavonoid'=>$row['bioactives']??null,
                'Phenolics'=>$row[59]??null,
            ]),
           
           
            'fatty_acid_percent'=>json_encode([
                'C4'=>$row['fatty_acid']??null,
                'C6'=>$row[61]??null,
                'C8'=>$row[62]??null,
                'C10'=>$row[63]??null,
                'C11'=>$row[64]??null,
                'C12'=>$row[65]??null,
                'C13'=>$row[66]??null,
                'C14'=>$row[67]??null,
                'C14_1'=>$row[68]??null,
                'C15'=>$row[69]??null,
                'C15_1'=>$row[70]??null,
                'C16'=>$row[71]??null,
                'C16_1'=>$row[72]??null,
                'C17'=>$row[73]??null,
                'C17_1'=>$row[74]??null,
                'C18'=>$row[75]??null,
                'C18_1'=>$row[76]??null,
                'C18_2'=>$row[77]??null,
                'C18_3_n6'=>$row[78]??null,
                'C18_3_n3'=>$row[79]??null,
                'C20'=>$row[80]??null,
                'C20_1'=>$row[81]??null,
                'C20_2'=>$row[82]??null,
                'C21'=>$row[83]??null,
                'C20_3_n6'=>$row[84]??null,
                'C20_3_n3'=>$row[85]??null,
                'C20_4'=>$row[86]??null,
                'C22'=>$row[87]??null,
                'C22_1'=>$row[88]??null,
                'C22_2'=>$row[89]??null,
                'C23'=>$row[90]??null,
                'C24'=>$row[91]??null,
                'C24_1'=>$row[92]??null,
                'C22_6'=>$row[93]??null,
            ]),
           
           
           
            'bioactives_mg_per_100g'=>json_encode([
                '4-OH Benzoic Acid'=>$row['bioactives_mg100g']??null,
                'Apigenin'=>$row[95]??null,
                'Apigenin_7_Glu'=>$row[96]??null,
                'Caffeic_Acid'=>$row[97]??null,
                'Ellagic_Acid'=>$row[98]??null,
                'Epicatechin'=>$row[99]??null,
                'Isovitexin'=>$row[100]??null,
                'Kaempherol'=>$row[101]??null,
                'Hespiridin'=>$row[102]??null,
                'Naringenin'=>$row[103]??null,
                'p_Coumaric_Acid'=>$row[104]??null,
                'Quercitin'=>$row[105]??null,
                'Sinapic_Acid'=>$row[106]??null,
                'Syringic_Acid'=>$row[107]??null,
                'Trans_Ferulic_Acid'=>$row[108]??null,
                'Vanilin'=>$row[109]??null,
                'Luteolin_7_Glucoside'=>$row[110]??null,
                'Rutin_Hydrate'=>$row[111]??null,
                'Vitexin'=>$row[112]??null,
            ]),
           
        ];
    
        return new RiceData($data);
    }

}
