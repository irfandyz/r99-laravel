<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $data = [
            [
                "name" => "Modern",
                "category" => [
                    [
                        "name" => "Bar Chair",
                        "data" => [
                            [
                                "name" => "OF-BAR-001",
                                "path" => "assets/product/modern/BAR/OF-BAR-001.png",
                                "url" => "assets/product/modern/BAR/",
                            ],
                            [
                                "name" => "OF-BAR-002",
                                "path" => "assets/product/modern/BAR/OF-BAR-002.png",
                                "url" => "assets/product/modern/BAR/",
                            ],
                            [
                                "name" => "OF-BAR-003",
                                "path" => "assets/product/modern/BAR/OF-BAR-003.png",
                                "url" => "assets/product/modern/BAR/",
                            ],
                            [
                                "name" => "OF-BAR-004",
                                "path" => "assets/product/modern/BAR/OF-BAR-004.png",
                                "url" => "assets/product/modern/BAR/",
                            ],
                            [
                                "name" => "OF-BAR-005",
                                "path" => "assets/product/modern/BAR/OF-BAR-005.png",
                                "url" => "assets/product/modern/BAR/",
                            ],
                            [
                                "name" => "OF-BAR-006",
                                "path" => "assets/product/modern/BAR/OF-BAR-006.png",
                                "url" => "assets/product/modern/BAR/",
                            ],
                            [
                                "name" => "OF-BAR-007",
                                "path" => "assets/product/modern/BAR/OF-BAR-007.png",
                                "url" => "assets/product/modern/BAR/",
                            ],
                            [
                                "name" => "OF-BAR-008",
                                "path" => "assets/product/modern/BAR/OF-BAR-008.png",
                                "url" => "assets/product/modern/BAR/",
                            ],
                            [
                                "name" => "OF-BAR-009",
                                "path" => "assets/product/modern/BAR/OF-BAR-009.png",
                                "url" => "assets/product/modern/BAR/",
                            ],
                            [
                                "name" => "OF-BAR-010",
                                "path" => "assets/product/modern/BAR/OF-BAR-010.png",
                                "url" => "assets/product/modern/BAR/",
                            ],
                        ],
                    ],
                    [
                        "name" => "Chair",
                        "data" => [
                            [
                                "name" => "OF-CHAIR-001",
                                "path" => "assets/product/modern/Chair/OF-CHA-001.png",
                                "url" => "assets/product/modern/Chair/",
                            ],
                            [
                                "name" => "OF-CHAIR-002",
                                "path" => "assets/product/modern/CHAIR/OF-CHA-002.png",
                                "url" => "assets/product/modern/CHAIR/",
                            ],
                            [
                                "name" => "OF-CHAIR-003",
                                "path" => "assets/product/modern/CHAIR/OF-CHA-003.png",
                                "url" => "assets/product/modern/CHAIR/",
                            ],
                            [
                                "name" => "OF-CHAIR-004",
                                "path" => "assets/product/modern/CHAIR/OF-CHA-004.png",
                                "url" => "assets/product/modern/CHAIR/",
                            ],
                            [
                                "name" => "OF-CHAIR-005",
                                "path" => "assets/product/modern/CHAIR/OF-CHA-005.png",
                                "url" => "assets/product/modern/CHAIR/",
                            ],
                            [
                                "name" => "OF-CHAIR-006",
                                "path" => "assets/product/modern/CHAIR/OF-CHA-006.png",
                                "url" => "assets/product/modern/CHAIR/",
                            ],
                            [
                                "name" => "OF-CHAIR-007",
                                "path" => "assets/product/modern/CHAIR/OF-CHA-007.png",
                                "url" => "assets/product/modern/CHAIR/",
                            ],
                            [
                                "name" => "OF-CHAIR-008",
                                "path" => "assets/product/modern/CHAIR/OF-CHA-008.png",
                                "url" => "assets/product/modern/CHAIR/",
                            ],
                            [
                                "name" => "OF-CHAIR-009",
                                "path" => "assets/product/modern/CHAIR/OF-CHA-009.png",
                                "url" => "assets/product/modern/CHAIR/",
                            ],
                            [
                                "name" => "OF-CHAIR-010",
                                "path" => "assets/product/modern/CHAIR/OF-CHA-010.png",
                                "url" => "assets/product/modern/CHAIR/",
                            ],
                            [
                                "name" => "OF-CHAIR-011",
                                "path" => "assets/product/modern/CHAIR/OF-CHA-011.png",
                                "url" => "assets/product/modern/CHAIR/",
                            ],
                            [
                                "name" => "OF-CHAIR-012",
                                "path" => "assets/product/modern/CHAIR/OF-CHA-012.png",
                                "url" => "assets/product/modern/CHAIR/",
                            ],
                            [
                                "name" => "OF-CHAIR-013",
                                "path" => "assets/product/modern/CHAIR/OF-CHA-013.png",
                                "url" => "assets/product/modern/CHAIR/",
                            ],
                            [
                                "name" => "OF-CHAIR-014",
                                "path" => "assets/product/modern/CHAIR/OF-CHA-014.png",
                                "url" => "assets/product/modern/CHAIR/",
                            ],
                            [
                                "name" => "OF-CHAIR-015",
                                "path" => "assets/product/modern/CHAIR/OF-CHA-015.png",
                                "url" => "assets/product/modern/CHAIR/",
                            ],
                            [
                                "name" => "OF-CHAIR-016",
                                "path" => "assets/product/modern/CHAIR/OF-CHA-016.png",
                                "url" => "assets/product/modern/CHAIR/",
                            ],
                            [
                                "name" => "OF-CHAIR-017",
                                "path" => "assets/product/modern/CHAIR/OF-CHA-017.png",
                                "url" => "assets/product/modern/CHAIR/",
                            ],
                            [
                                "name" => "OF-CHAIR-018",
                                "path" => "assets/product/modern/CHAIR/OF-CHA-018.png",
                                "url" => "assets/product/modern/CHAIR/",
                            ],
                            [
                                "name" => "OF-CHAIR-019",
                                "path" => "assets/product/modern/CHAIR/OF-CHA-019.png",
                                "url" => "assets/product/modern/CHAIR/",
                            ],
                            [
                                "name" => "OF-CHAIR-020",
                                "path" => "assets/product/modern/CHAIR/OF-CHA-020.png",
                                "url" => "assets/product/modern/CHAIR/",
                            ],
                            [
                                "name" => "OF-CHAIR-021",
                                "path" => "assets/product/modern/CHAIR/OF-CHA-021.png",
                                "url" => "assets/product/modern/CHAIR/",
                            ],
                            [
                                "name" => "OF-CHAIR-022",
                                "path" => "assets/product/modern/CHAIR/OF-CHA-022.png",
                                "url" => "assets/product/modern/CHAIR/",
                            ],
                            [
                                "name" => "OF-CHAIR-023",
                                "path" => "assets/product/modern/CHAIR/OF-CHA-023.png",
                                "url" => "assets/product/modern/CHAIR/",
                            ],
                            [
                                "name" => "OF-CHAIR-024",
                                "path" => "assets/product/modern/CHAIR/OF-CHA-024.png",
                                "url" => "assets/product/modern/CHAIR/",
                            ],
                            [
                                "name" => "OF-CHAIR-025",
                                "path" => "assets/product/modern/CHAIR/OF-CHA-025.png",
                                "url" => "assets/product/modern/CHAIR/",
                            ],
                            [
                                "name" => "OF-CHAIR-026",
                                "path" => "assets/product/modern/CHAIR/OF-CHA-026.png",
                                "url" => "assets/product/modern/CHAIR/",
                            ],
                            [
                                "name" => "OF-CHAIR-027",
                                "path" => "assets/product/modern/CHAIR/OF-CHA-027.png",
                                "url" => "assets/product/modern/CHAIR/",
                            ],
                            [
                                "name" => "OF-CHAIR-028",
                                "path" => "assets/product/modern/CHAIR/OF-CHA-028.png",
                                "url" => "assets/product/modern/CHAIR/",
                            ],
                            [
                                "name" => "OF-CHAIR-029",
                                "path" => "assets/product/modern/CHAIR/OF-CHA-029.png",
                                "url" => "assets/product/modern/CHAIR/",
                            ],
                            [
                                "name" => "OF-CHAIR-030",
                                "path" => "assets/product/modern/CHAIR/OF-CHA-030.png",
                                "url" => "assets/product/modern/CHAIR/",
                            ],
                            [
                                "name" => "OF-CHAIR-031",
                                "path" => "assets/product/modern/CHAIR/OF-CHA-031.png",
                                "url" => "assets/product/modern/CHAIR/",
                            ],
                            [
                                "name" => "OF-CHAIR-032",
                                "path" => "assets/product/modern/CHAIR/OF-CHA-032.png",
                                "url" => "assets/product/modern/CHAIR/",
                            ],
                            [
                                "name" => "OF-CHAIR-033",
                                "path" => "assets/product/modern/CHAIR/OF-CHA-033.png",
                                "url" => "assets/product/modern/CHAIR/",
                            ],
                            [
                                "name" => "OF-CHAIR-034",
                                "path" => "assets/product/modern/CHAIR/OF-CHA-034.png",
                                "url" => "assets/product/modern/CHAIR/",
                            ],
                            [
                                "name" => "OF-CHAIR-035",
                                "path" => "assets/product/modern/CHAIR/OF-CHA-035.png",
                                "url" => "assets/product/modern/CHAIR/",
                            ],
                            [
                                "name" => "OF-CHAIR-036",
                                "path" => "assets/product/modern/CHAIR/OF-CHA-036.png",
                                "url" => "assets/product/modern/CHAIR/",
                            ],
                            [
                                "name" => "OF-CHAIR-037",
                                "path" => "assets/product/modern/CHAIR/OF-CHA-037.png",
                                "url" => "assets/product/modern/CHAIR/",
                            ],
                            [
                                "name" => "OF-CHAIR-038",
                                "path" => "assets/product/modern/CHAIR/OF-CHA-038.png",
                                "url" => "assets/product/modern/CHAIR/",
                            ],
                            [
                                "name" => "OF-CHAIR-039",
                                "path" => "assets/product/modern/CHAIR/OF-CHA-039.png",
                                "url" => "assets/product/modern/CHAIR/",
                            ],
                            [
                                "name" => "OF-CHAIR-040",
                                "path" => "assets/product/modern/CHAIR/OF-CHA-040.png",
                                "url" => "assets/product/modern/CHAIR/",
                            ],
                            [
                                "name" => "OF-CHAIR-041",
                                "path" => "assets/product/modern/CHAIR/OF-CHA-041.png",
                                "url" => "assets/product/modern/CHAIR/",
                            ],
                            [
                                "name" => "OF-CHAIR-042",
                                "path" => "assets/product/modern/CHAIR/OF-CHA-042.png",
                                "url" => "assets/product/modern/CHAIR/",
                            ],
                            [
                                "name" => "OF-CHAIR-043",
                                "path" => "assets/product/modern/CHAIR/OF-CHA-043.png",
                                "url" => "assets/product/modern/CHAIR/",
                            ],
                            [
                                "name" => "OF-CHAIR-044",
                                "path" => "assets/product/modern/CHAIR/OF-CHA-044.png",
                                "url" => "assets/product/modern/CHAIR/",
                            ],
                            [
                                "name" => "OF-CHAIR-045",
                                "path" => "assets/product/modern/CHAIR/OF-CHA-045.png",
                                "url" => "assets/product/modern/CHAIR/",
                            ],
                            [
                                "name" => "OF-CHAIR-046",
                                "path" => "assets/product/modern/CHAIR/OF-CHA-046.png",
                                "url" => "assets/product/modern/CHAIR/",
                            ],
                            [
                                "name" => "OF-CHAIR-047",
                                "path" => "assets/product/modern/CHAIR/OF-CHA-047.png",
                                "url" => "assets/product/modern/CHAIR/",
                            ],
                            [
                                "name" => "OF-CHAIR-048",
                                "path" => "assets/product/modern/CHAIR/OF-CHA-048.png",
                                "url" => "assets/product/modern/CHAIR/",
                            ],
                            [
                                "name" => "OF-CHAIR-049",
                                "path" => "assets/product/modern/CHAIR/OF-CHA-049.png",
                                "url" => "assets/product/modern/CHAIR/",
                            ],
                            [
                                "name" => "OF-CHAIR-050",
                                "path" => "assets/product/modern/CHAIR/OF-CHA-050.png",
                                "url" => "assets/product/modern/CHAIR/",
                            ],
                            [
                                "name" => "OF-CHAIR-051",
                                "path" => "assets/product/modern/CHAIR/OF-CHA-051.png",
                                "url" => "assets/product/modern/CHAIR/",
                            ],
                            [
                                "name" => "OF-CHAIR-052",
                                "path" => "assets/product/modern/CHAIR/OF-CHA-052.png",
                                "url" => "assets/product/modern/CHAIR/",
                            ],
                            [
                                "name" => "OF-CHAIR-053",
                                "path" => "assets/product/modern/CHAIR/OF-CHA-053.png",
                                "url" => "assets/product/modern/CHAIR/",
                            ],
                        ],
                    ],
                    [
                        "name" => "Dining",
                        "data" => [
                            [
                                "name" => "OF-DNS-001",
                                "path" => "assets/product/modern/Dining/OF-DNS-001.png",
                                "url" => "assets/product/modern/Dining/",
                            ],
                            [
                                "name" => "OF-DNS-002",
                                "path" => "assets/product/modern/DINING/OF-DNS-002.png",
                                "url" => "assets/product/modern/DINING/",
                            ],
                            [
                                "name" => "OF-DNS-003",
                                "path" => "assets/product/modern/DINING/OF-DNS-003.png",
                                "url" => "assets/product/modern/DINING/",
                            ],
                        ],
                    ],
                    [
                        "name" => "Lounge",
                        "data" => [
                            [
                                "name" => "OF-LOU-001",
                                "path" => "assets/product/modern/Lounge/OF-LOU-001.png",
                                "url" => "assets/product/modern/Lounge/",
                            ],
                            [
                                "name" => "OF-LOU-002",
                                "path" => "assets/product/modern/LOUNGE/OF-LOU-002.png",
                                "url" => "assets/product/modern/LOUNGE/",
                            ],
                            [
                                "name" => "OF-LOU-003",
                                "path" => "assets/product/modern/LOUNGE/OF-LOU-003.png",
                                "url" => "assets/product/modern/LOUNGE/",
                            ],
                            [
                                "name" => "OF-LOU-004",
                                "path" => "assets/product/modern/LOUNGE/OF-LOU-004.png",
                                "url" => "assets/product/modern/LOUNGE/",
                            ],
                            [
                                "name" => "OF-LOU-005",
                                "path" => "assets/product/modern/LOUNGE/OF-LOU-005.png",
                                "url" => "assets/product/modern/LOUNGE/",
                            ],
                            [
                                "name" => "OF-LOU-006",
                                "path" => "assets/product/modern/LOUNGE/OF-LOU-006.png",
                                "url" => "assets/product/modern/LOUNGE/",
                            ],
                            [
                                "name" => "OF-LOU-007",
                                "path" => "assets/product/modern/LOUNGE/OF-LOU-007.png",
                                "url" => "assets/product/modern/LOUNGE/",
                            ],
                            [
                                "name" => "OF-LOU-008",
                                "path" => "assets/product/modern/LOUNGE/OF-LOU-008.png",
                                "url" => "assets/product/modern/LOUNGE/",
                            ],
                            [
                                "name" => "OF-LOU-009",
                                "path" => "assets/product/modern/LOUNGE/OF-LOU-009.png",
                                "url" => "assets/product/modern/LOUNGE/",
                            ],
                            [
                                "name" => "OF-LOU-010",
                                "path" => "assets/product/modern/LOUNGE/OF-LOU-010.png",
                                "url" => "assets/product/modern/LOUNGE/",
                            ],
                            [
                                "name" => "OF-LOU-011",
                                "path" => "assets/product/modern/LOUNGE/OF-LOU-011.png",
                                "url" => "assets/product/modern/LOUNGE/",
                            ],
                        ],
                    ],
                    [
                        "name" => "Puff",
                        "data" => [
                            [
                                "name" => "OF-PUF-001",
                                "path" => "assets/product/modern/Puff/OF-PUF-001.png",
                                "url" => "assets/product/modern/Puff/",
                            ],
                            [
                                "name" => "OF-PUF-002",
                                "path" => "assets/product/modern/PUFF/OF-PUF-002.png",
                                "url" => "assets/product/modern/PUFF/",
                            ],
                            [
                                "name" => "OF-PUF-003",
                                "path" => "assets/product/modern/PUFF/OF-PUF-003.png",
                                "url" => "assets/product/modern/PUFF/",
                            ],
                            [
                                "name" => "OF-PUF-004",
                                "path" => "assets/product/modern/PUFF/OF-PUF-004.png",
                                "url" => "assets/product/modern/PUFF/",
                            ],
                            [
                                "name" => "OF-PUF-005",
                                "path" => "assets/product/modern/PUFF/OF-PUF-005.png",
                                "url" => "assets/product/modern/PUFF/",
                            ],
                            [
                                "name" => "OF-PUF-006",
                                "path" => "assets/product/modern/PUFF/OF-PUF-006.png",
                                "url" => "assets/product/modern/PUFF/",
                            ],
                            [
                                "name" => "OF-PUF-007",
                                "path" => "assets/product/modern/PUFF/OF-PUF-007.png",
                                "url" => "assets/product/modern/PUFF/",
                            ],
                            [
                                "name" => "OF-PUF-008",
                                "path" => "assets/product/modern/PUFF/OF-PUF-008.png",
                                "url" => "assets/product/modern/PUFF/",
                            ],
                            [
                                "name" => "OF-PUF-009",
                                "path" => "assets/product/modern/PUFF/OF-PUF-009.png",
                                "url" => "assets/product/modern/PUFF/",
                            ],
                            [
                                "name" => "OF-PUF-010",
                                "path" => "assets/product/modern/PUFF/OF-PUF-010.png",
                                "url" => "assets/product/modern/PUFF/",
                            ],
                            [
                                "name" => "OF-PUF-011",
                                "path" => "assets/product/modern/PUFF/OF-PUF-011.png",
                                "url" => "assets/product/modern/PUFF/",
                            ],
                        ],
                    ],
                    [
                        "name" => "Sofa",
                        "data" => [
                            [
                                "name" => "OF-LVS-001",
                                "path" => "assets/product/modern/Sofa/OF-LVS-001.png",
                                "url" => "assets/product/modern/Sofa/",
                            ],
                            [
                                "name" => "OF-LVS-002",
                                "path" => "assets/product/modern/SOFA/OF-LVS-002.png",
                                "url" => "assets/product/modern/SOFA/",
                            ],
                            [
                                "name" => "OF-LVS-003",
                                "path" => "assets/product/modern/SOFA/OF-LVS-003.png",
                                "url" => "assets/product/modern/SOFA/",
                            ],
                            [
                                "name" => "OF-LVS-004",
                                "path" => "assets/product/modern/SOFA/OF-LVS-004.png",
                                "url" => "assets/product/modern/SOFA/",
                            ],
                            [
                                "name" => "OF-LVS-005",
                                "path" => "assets/product/modern/SOFA/OF-LVS-005.png",
                                "url" => "assets/product/modern/SOFA/",
                            ],
                            [
                                "name" => "OF-LVS-006",
                                "path" => "assets/product/modern/SOFA/OF-LVS-006.png",
                                "url" => "assets/product/modern/SOFA/",
                            ],
                            [
                                "name" => "OF-LVS-007",
                                "path" => "assets/product/modern/SOFA/OF-LVS-007.png",
                                "url" => "assets/product/modern/SOFA/",
                            ],
                            [
                                "name" => "OF-LVS-008",
                                "path" => "assets/product/modern/SOFA/OF-LVS-008.png",
                                "url" => "assets/product/modern/SOFA/",
                            ],
                            [
                                "name" => "OF-LVS-009",
                                "path" => "assets/product/modern/SOFA/OF-LVS-009.png",
                                "url" => "assets/product/modern/SOFA/",
                            ],
                            [
                                "name" => "OF-LVS-010",
                                "path" => "assets/product/modern/SOFA/OF-LVS-010.png",
                                "url" => "assets/product/modern/SOFA/",
                            ],
                            [
                                "name" => "OF-LVS-011",
                                "path" => "assets/product/modern/SOFA/OF-LVS-011.png",
                                "url" => "assets/product/modern/SOFA/",
                            ],
                            [
                                "name" => "OF-LVS-012",
                                "path" => "assets/product/modern/SOFA/OF-LVS-012.png",
                                "url" => "assets/product/modern/SOFA/",
                            ],
                            [
                                "name" => "OF-LVS-013",
                                "path" => "assets/product/modern/SOFA/OF-LVS-013.png",
                                "url" => "assets/product/modern/SOFA/",
                            ],
                            [
                                "name" => "OF-LVS-014",
                                "path" => "assets/product/modern/SOFA/OF-LVS-014.png",
                                "url" => "assets/product/modern/SOFA/",
                            ],
                            [
                                "name" => "OF-LVS-015",
                                "path" => "assets/product/modern/SOFA/OF-LVS-015.png",
                                "url" => "assets/product/modern/SOFA/",
                            ],
                            [
                                "name" => "OF-LVS-016",
                                "path" => "assets/product/modern/SOFA/OF-LVS-016.png",
                                "url" => "assets/product/modern/SOFA/",
                            ],
                            [
                                "name" => "OF-LVS-017",
                                "path" => "assets/product/modern/SOFA/OF-LVS-017.png",
                                "url" => "assets/product/modern/SOFA/",
                            ],
                            [
                                "name" => "OF-LVS-018",
                                "path" => "assets/product/modern/SOFA/OF-LVS-018.png",
                                "url" => "assets/product/modern/SOFA/",
                            ],
                            [
                                "name" => "OF-LVS-019",
                                "path" => "assets/product/modern/SOFA/OF-LVS-019.png",
                                "url" => "assets/product/modern/SOFA/",
                            ],
                            [
                                "name" => "OF-LVS-020",
                                "path" => "assets/product/modern/SOFA/OF-LVS-020.png",
                                "url" => "assets/product/modern/SOFA/",
                            ],
                            [
                                "name" => "OF-LVS-021",
                                "path" => "assets/product/modern/SOFA/OF-LVS-021.png",
                                "url" => "assets/product/modern/SOFA/",
                            ],
                            [
                                "name" => "OF-LVS-022",
                                "path" => "assets/product/modern/SOFA/OF-LVS-022.png",
                                "url" => "assets/product/modern/SOFA/",
                            ],
                            [
                                "name" => "OF-LVS-023",
                                "path" => "assets/product/modern/SOFA/OF-LVS-023.png",
                                "url" => "assets/product/modern/SOFA/",
                            ],
                            [
                                "name" => "OF-LVS-024",
                                "path" => "assets/product/modern/SOFA/OF-LVS-024.png",
                                "url" => "assets/product/modern/SOFA/",
                            ],
                            [
                                "name" => "OF-LVS-025",
                                "path" => "assets/product/modern/SOFA/OF-LVS-025.png",
                                "url" => "assets/product/modern/SOFA/",
                            ],
                        ],
                    ],
                    [
                        "name" => "Table",
                        "data" => [
                            [
                                "name" => "OF-TAB-001",
                                "path" => "assets/product/modern/TABLE/TAB-001.png",
                                "url" => "assets/product/modern/TABLE/",
                            ],
                            [
                                "name" => "OF-TAB-002",
                                "path" => "assets/product/modern/TABLE/OF-TAB-002.png",
                                "url" => "assets/product/modern/TABLE/",
                            ],
                            [
                                "name" => "OF-TAB-003",
                                "path" => "assets/product/modern/TABLE/OF-TAB-003.png",
                                "url" => "assets/product/modern/TABLE/",
                            ],
                            [
                                "name" => "OF-TAB-004",
                                "path" => "assets/product/modern/TABLE/OF-TAB-004.png",
                                "url" => "assets/product/modern/TABLE/",
                            ],
                            [
                                "name" => "OF-TAB-005",
                                "path" => "assets/product/modern/TABLE/OF-TAB-005.png",
                                "url" => "assets/product/modern/TABLE/",
                            ],
                            [
                                "name" => "OF-TAB-006",
                                "path" => "assets/product/modern/TABLE/OF-TAB-006.png",
                                "url" => "assets/product/modern/TABLE/",
                            ],
                            [
                                "name" => "OF-TAB-007",
                                "path" => "assets/product/modern/TABLE/OF-TAB-007.png",
                                "url" => "assets/product/modern/TABLE/",
                            ],
                            [
                                "name" => "OF-TAB-008",
                                "path" => "assets/product/modern/TABLE/OF-TAB-008.png",
                                "url" => "assets/product/modern/TABLE/",
                            ],
                            [
                                "name" => "OF-TAB-009",
                                "path" => "assets/product/modern/TABLE/OF-TAB-009.png",
                                "url" => "assets/product/modern/TABLE/",
                            ],
                            [
                                "name" => "OF-TAB-010",
                                "path" => "assets/product/modern/TABLE/OF-TAB-010.png",
                                "url" => "assets/product/modern/TABLE/",
                            ],
                            [
                                "name" => "OF-TAB-011",
                                "path" => "assets/product/modern/TABLE/OF-TAB-011.png",
                                "url" => "assets/product/modern/TABLE/",
                            ],
                            [
                                "name" => "OF-TAB-012",
                                "path" => "assets/product/modern/TABLE/OF-TAB-012.png",
                                "url" => "assets/product/modern/TABLE/",
                            ],
                            [
                                "name" => "OF-TAB-013",
                                "path" => "assets/product/modern/TABLE/OF-TAB-013.png",
                                "url" => "assets/product/modern/TABLE/",
                            ],
                            [
                                "name" => "OF-TAB-014",
                                "path" => "assets/product/modern/TABLE/OF-TAB-014.png",
                                "url" => "assets/product/modern/TABLE/",
                            ],
                            [
                                "name" => "OF-TAB-015",
                                "path" => "assets/product/modern/TABLE/OF-TAB-015.png",
                                "url" => "assets/product/modern/TABLE/",
                            ],
                            [
                                "name" => "OF-TAB-016",
                                "path" => "assets/product/modern/TABLE/OF-TAB-016.png",
                                "url" => "assets/product/modern/TABLE/",
                            ],
                        ],
                    ],
                ],
            ],
            [
                "name" => "Natural",
                "category" => [
                    [
                        "name" => "Bar Chair",
                        "data" => [
                            [
                                "name" => "OF-TAB-001",
                                "path" => "assets/product/natural/Bar Chair/OF-BAR-001.png",
                                "url" => "assets/product/natural/Bar Chair/",
                            ],
                            [
                                "name" => "OF-TAB-002",
                                "path" => "assets/product/natural/Bar Chair/OF-BAR-002.png",
                                "url" => "assets/product/natural/Bar Chair/",
                            ],
                            [
                                "name" => "OF-TAB-003",
                                "path" => "assets/product/natural/Bar Chair/OF-BAR-003.png",
                                "url" => "assets/product/natural/Bar Chair/",
                            ],
                            [
                                "name" => "OF-TAB-004",
                                "path" => "assets/product/natural/Bar Chair/OF-BAR-004.png",
                                "url" => "assets/product/natural/Bar Chair/",
                            ],
                            [
                                "name" => "OF-TAB-005",
                                "path" => "assets/product/natural/Bar Chair/OF-BAR-005.png",
                                "url" => "assets/product/natural/Bar Chair/",
                            ],
                            [
                                "name" => "OF-TAB-006",
                                "path" => "assets/product/natural/Bar Chair/OF-BAR-006.png",
                                "url" => "assets/product/natural/Bar Chair/",
                            ],
                            [
                                "name" => "OF-TAB-007",
                                "path" => "assets/product/natural/Bar Chair/OF-BAR-007.png",
                                "url" => "assets/product/natural/Bar Chair/",
                            ],
                            [
                                "name" => "OF-TAB-008",
                                "path" => "assets/product/natural/Bar Chair/OF-BAR-008.png",
                                "url" => "assets/product/natural/Bar Chair/",
                            ],
                            [
                                "name" => "OF-TAB-009",
                                "path" => "assets/product/natural/Bar Chair/OF-BAR-009.png",
                                "url" => "assets/product/natural/Bar Chair/",
                            ],
                            [
                                "name" => "OF-TAB-010",
                                "path" => "assets/product/natural/Bar Chair/OF-BAR-010.png",
                                "url" => "assets/product/natural/Bar Chair/",
                            ],
                            [
                                "name" => "OF-TAB-011",
                                "path" => "assets/product/natural/Bar Chair/OF-BAR-011.png",
                                "url" => "assets/product/natural/Bar Chair/",
                            ],
                            [
                                "name" => "OF-TAB-012",
                                "path" => "assets/product/natural/Bar Chair/OF-BAR-012.png",
                                "url" => "assets/product/natural/Bar Chair/",
                            ],
                            [
                                "name" => "OF-TAB-013",
                                "path" => "assets/product/natural/Bar Chair/OF-BAR-013.png",
                                "url" => "assets/product/natural/Bar Chair/",
                            ],
                        ],
                    ],
                    [
                        "name" => "Rattan Bag 1",
                        "data" => [
                            [
                                "name" => "BAG-MJ-001",
                                "path" => "assets/product/natural/Rattan Bag/BAG-MJ-001.png",
                                "url" => "assets/product/natural/Rattan Bag/",
                            ],
                            [
                                "name" => "BAG-MJ-002",
                                "path" => "assets/product/natural/Rattan Bag/BAG-MJ-002.png",
                                "url" => "assets/product/natural/Rattan Bag/",
                            ],
                            [
                                "name" => "BAG-MJ-003",
                                "path" => "assets/product/natural/Rattan Bag/BAG-MJ-003.png",
                                "url" => "assets/product/natural/Rattan Bag/",
                            ],
                            [
                                "name" => "BAG-MJ-004",
                                "path" => "assets/product/natural/Rattan Bag/BAG-MJ-004.png",
                                "url" => "assets/product/natural/Rattan Bag/",
                            ],
                            [
                                "name" => "BAG-MJ-005",
                                "path" => "assets/product/natural/Rattan Bag/BAG-MJ-005.png",
                                "url" => "assets/product/natural/Rattan Bag/",
                            ],
                            [
                                "name" => "BAG-MJ-006",
                                "path" => "assets/product/natural/Rattan Bag/BAG-MJ-006.png",
                                "url" => "assets/product/natural/Rattan Bag/",
                            ],
                            [
                                "name" => "BAG-MJ-007",
                                "path" => "assets/product/natural/Rattan Bag/BAG-MJ-007.png",
                                "url" => "assets/product/natural/Rattan Bag/",
                            ],
                            [
                                "name" => "BAG-MJ-008",
                                "path" => "assets/product/natural/Rattan Bag/BAG-MJ-008.png",
                                "url" => "assets/product/natural/Rattan Bag/",
                            ],
                            [
                                "name" => "BAG-MJ-009",
                                "path" => "assets/product/natural/Rattan Bag/BAG-MJ-009.png",
                                "url" => "assets/product/natural/Rattan Bag/",
                            ],
                            [
                                "name" => "BAG-MJ-010",
                                "path" => "assets/product/natural/Rattan Bag/BAG-MJ-010.png",
                                "url" => "assets/product/natural/Rattan Bag/",
                            ],
                            [
                                "name" => "BAG-MJ-011",
                                "path" => "assets/product/natural/Rattan Bag/BAG-MJ-011.png",
                                "url" => "assets/product/natural/Rattan Bag/",
                            ],
                            [
                                "name" => "BAG-MJ-012",
                                "path" => "assets/product/natural/Rattan Bag/BAG-MJ-012.png",
                                "url" => "assets/product/natural/Rattan Bag/",
                            ],
                            [
                                "name" => "BAG-MJ-013",
                                "path" => "assets/product/natural/Rattan Bag/BAG-MJ-013.png",
                                "url" => "assets/product/natural/Rattan Bag/",
                            ],
                            [
                                "name" => "BAG-MJ-014",
                                "path" => "assets/product/natural/Rattan Bag/BAG-MJ-014.png",
                                "url" => "assets/product/natural/Rattan Bag/",
                            ],
                        ],
                    ],
                    [
                        "name" => "Rattan Bag 2",
                        "data" => [
                            [
                                "name" => "BAG-LBK-001",
                                "path" => "assets/product/natural/Rattan Bag 2/BAG-LBK-001.png",
                                "url" => "assets/product/natural/Rattan Bag 2/",
                            ],
                            [
                                "name" => "BAG-LBK-002",
                                "path" => "assets/product/natural/Rattan Bag 2/BAG-LBK-002.png",
                                "url" => "assets/product/natural/Rattan Bag 2/",
                            ],
                            [
                                "name" => "BAG-LBK-003",
                                "path" => "assets/product/natural/Rattan Bag 2/BAG-LBK-003.png",
                                "url" => "assets/product/natural/Rattan Bag 2/",
                            ],
                            [
                                "name" => "BAG-LBK-004",
                                "path" => "assets/product/natural/Rattan Bag 2/BAG-LBK-004.png",
                                "url" => "assets/product/natural/Rattan Bag 2/",
                            ],
                            [
                                "name" => "BAG-LBK-005",
                                "path" => "assets/product/natural/Rattan Bag 2/BAG-LBK-005.png",
                                "url" => "assets/product/natural/Rattan Bag 2/",
                            ],
                            [
                                "name" => "BAG-LBK-006",
                                "path" => "assets/product/natural/Rattan Bag 2/BAG-LBK-006.png",
                                "url" => "assets/product/natural/Rattan Bag 2/",
                            ],
                            [
                                "name" => "BAG-LBK-007",
                                "path" => "assets/product/natural/Rattan Bag 2/BAG-LBK-007.png",
                                "url" => "assets/product/natural/Rattan Bag 2/",
                            ],
                            [
                                "name" => "BAG-LBK-008",
                                "path" => "assets/product/natural/Rattan Bag 2/BAG-LBK-008.png",
                                "url" => "assets/product/natural/Rattan Bag 2/",
                            ],
                            [
                                "name" => "BAG-LBK-009",
                                "path" => "assets/product/natural/Rattan Bag 2/BAG-LBK-009.png",
                                "url" => "assets/product/natural/Rattan Bag 2/",
                            ],
                            [
                                "name" => "BAG-LBK-010",
                                "path" => "assets/product/natural/Rattan Bag 2/BAG-LBK-010.png",
                                "url" => "assets/product/natural/Rattan Bag 2/",
                            ],
                            [
                                "name" => "BAG-LBK-011",
                                "path" => "assets/product/natural/Rattan Bag 2/BAG-LBK-011.png",
                                "url" => "assets/product/natural/Rattan Bag 2/",
                            ],
                            [
                                "name" => "BAG-LBK-012",
                                "path" => "assets/product/natural/Rattan Bag 2/BAG-LBK-012.png",
                                "url" => "assets/product/natural/Rattan Bag 2/",
                            ],
                            [
                                "name" => "BAG-LBK-013",
                                "path" => "assets/product/natural/Rattan Bag 2/BAG-LBK-013.png",
                                "url" => "assets/product/natural/Rattan Bag 2/",
                            ],
                            [
                                "name" => "BAG-LBK-014",
                                "path" => "assets/product/natural/Rattan Bag 2/BAG-LBK-014.png",
                                "url" => "assets/product/natural/Rattan Bag 2/",
                            ],
                            [
                                "name" => "BAG-LBK-015",
                                "path" => "assets/product/natural/Rattan Bag 2/BAG-LBK-015.png",
                                "url" => "assets/product/natural/Rattan Bag 2/",
                            ],
                            [
                                "name" => "BAG-LBK-016",
                                "path" => "assets/product/natural/Rattan Bag 2/BAG-LBK-016.png",
                                "url" => "assets/product/natural/Rattan Bag 2/",
                            ],
                            [
                                "name" => "BAG-LBK-017",
                                "path" => "assets/product/natural/Rattan Bag 2/BAG-LBK-017.png",
                                "url" => "assets/product/natural/Rattan Bag 2/",
                            ],
                            [
                                "name" => "BAG-LBK-018",
                                "path" => "assets/product/natural/Rattan Bag 2/BAG-LBK-018.png",
                                "url" => "assets/product/natural/Rattan Bag 2/",
                            ],
                            [
                                "name" => "BAG-LBK-019",
                                "path" => "assets/product/natural/Rattan Bag 2/BAG-LBK-019.png",
                                "url" => "assets/product/natural/Rattan Bag 2/",
                            ],
                            [
                                "name" => "BAG-LBK-020",
                                "path" => "assets/product/natural/Rattan Bag 2/BAG-LBK-020.png",
                                "url" => "assets/product/natural/Rattan Bag 2/",
                            ],
                            [
                                "name" => "BAG-LBK-021",
                                "path" => "assets/product/natural/Rattan Bag 2/BAG-LBK-021.png",
                                "url" => "assets/product/natural/Rattan Bag 2/",
                            ],
                            [
                                "name" => "BAG-LBK-022",
                                "path" => "assets/product/natural/Rattan Bag 2/BAG-LBK-022.png",
                                "url" => "assets/product/natural/Rattan Bag 2/",
                            ],
                            [
                                "name" => "BAG-LBK-023",
                                "path" => "assets/product/natural/Rattan Bag 2/BAG-LBK-023.png",
                                "url" => "assets/product/natural/Rattan Bag 2/",
                            ],
                            [
                                "name" => "BAG-LBK-024",
                                "path" => "assets/product/natural/Rattan Bag 2/BAG-LBK-024.png",
                                "url" => "assets/product/natural/Rattan Bag 2/",
                            ],
                            [
                                "name" => "BAG-LBK-025",
                                "path" => "assets/product/natural/Rattan Bag 2/BAG-LBK-025.png",
                                "url" => "assets/product/natural/Rattan Bag 2/",
                            ],
                            [
                                "name" => "BAG-LBK-026",
                                "path" => "assets/product/natural/Rattan Bag 2/BAG-LBK-026.png",
                                "url" => "assets/product/natural/Rattan Bag 2/",
                            ],
                            [
                                "name" => "BAG-LBK-027",
                                "path" => "assets/product/natural/Rattan Bag 2/BAG-LBK-027.png",
                                "url" => "assets/product/natural/Rattan Bag 2/",
                            ],
                            [
                                "name" => "BAG-LBK-028",
                                "path" => "assets/product/natural/Rattan Bag 2/BAG-LBK-028.png",
                                "url" => "assets/product/natural/Rattan Bag 2/",
                            ],
                            [
                                "name" => "BAG-LBK-029",
                                "path" => "assets/product/natural/Rattan Bag 2/BAG-LBK-029.png",
                                "url" => "assets/product/natural/Rattan Bag 2/",
                            ],
                            [
                                "name" => "BAG-LBK-030",
                                "path" => "assets/product/natural/Rattan Bag 2/BAG-LBK-030.png",
                                "url" => "assets/product/natural/Rattan Bag 2/",
                            ],
                            [
                                "name" => "BAG-LBK-031",
                                "path" => "assets/product/natural/Rattan Bag 2/BAG-LBK-031.png",
                                "url" => "assets/product/natural/Rattan Bag 2/",
                            ],
                            [
                                "name" => "BAG-LBK-032",
                                "path" => "assets/product/natural/Rattan Bag 2/BAG-LBK-032.png",
                                "url" => "assets/product/natural/Rattan Bag 2/",
                            ],
                            [
                                "name" => "BAG-LBK-033",
                                "path" => "assets/product/natural/Rattan Bag 2/BAG-LBK-033.png",
                                "url" => "assets/product/natural/Rattan Bag 2/",
                            ],
                            [
                                "name" => "BAG-LBK-034",
                                "path" => "assets/product/natural/Rattan Bag 2/BAG-LBK-034.png",
                                "url" => "assets/product/natural/Rattan Bag 2/",
                            ],
                            [
                                "name" => "BAG-LBK-035",
                                "path" => "assets/product/natural/Rattan Bag 2/BAG-LBK-035.png",
                                "url" => "assets/product/natural/Rattan Bag 2/",
                            ],
                            [
                                "name" => "BAG-LBK-036",
                                "path" => "assets/product/natural/Rattan Bag 2/BAG-LBK-036.png",
                                "url" => "assets/product/natural/Rattan Bag 2/",
                            ],
                            [
                                "name" => "BAG-LBK-037",
                                "path" => "assets/product/natural/Rattan Bag 2/BAG-LBK-037.png",
                                "url" => "assets/product/natural/Rattan Bag 2/",
                            ],
                            [
                                "name" => "BAG-LBK-038",
                                "path" => "assets/product/natural/Rattan Bag 2/BAG-LBK-038.png",
                                "url" => "assets/product/natural/Rattan Bag 2/",
                            ],
                            [
                                "name" => "BAG-LBK-039",
                                "path" => "assets/product/natural/Rattan Bag 2/BAG-LBK-039.png",
                                "url" => "assets/product/natural/Rattan Bag 2/",
                            ],
                            [
                                "name" => "BAG-LBK-040",
                                "path" => "assets/product/natural/Rattan Bag 2/BAG-LBK-040.png",
                                "url" => "assets/product/natural/Rattan Bag 2/",
                            ],
                            [
                                "name" => "BAG-LBK-041",
                                "path" => "assets/product/natural/Rattan Bag 2/BAG-LBK-041.png",
                                "url" => "assets/product/natural/Rattan Bag 2/",
                            ],
                            [
                                "name" => "BAG-LBK-042",
                                "path" => "assets/product/natural/Rattan Bag 2/BAG-LBK-042.png",
                                "url" => "assets/product/natural/Rattan Bag 2/",
                            ],
                            [
                                "name" => "BAG-LBK-043",
                                "path" => "assets/product/natural/Rattan Bag 2/BAG-LBK-043.png",
                                "url" => "assets/product/natural/Rattan Bag 2/",
                            ],
                            [
                                "name" => "BAG-LBK-044",
                                "path" => "assets/product/natural/Rattan Bag 2/BAG-LBK-044.png",
                                "url" => "assets/product/natural/Rattan Bag 2/",
                            ],
                        ],
                    ],
                    [
                        "name" => "Basket",
                        "data" => [
                            [
                                "name" => "NAT-BST-001",
                                "path" => "assets/product/natural/Basket/NAT-BST-001.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-002",
                                "path" => "assets/product/natural/Basket/NAT-BST-002.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-003",
                                "path" => "assets/product/natural/Basket/NAT-BST-003.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-004",
                                "path" => "assets/product/natural/Basket/NAT-BST-004.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-005",
                                "path" => "assets/product/natural/Basket/NAT-BST-005.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-006",
                                "path" => "assets/product/natural/Basket/NAT-BST-006.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-007",
                                "path" => "assets/product/natural/Basket/NAT-BST-007.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-008",
                                "path" => "assets/product/natural/Basket/NAT-BST-008.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-009",
                                "path" => "assets/product/natural/Basket/NAT-BST-009.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-010",
                                "path" => "assets/product/natural/Basket/NAT-BST-010.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-011",
                                "path" => "assets/product/natural/Basket/NAT-BST-011.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-012",
                                "path" => "assets/product/natural/Basket/NAT-BST-012.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-013",
                                "path" => "assets/product/natural/Basket/NAT-BST-013.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-014",
                                "path" => "assets/product/natural/Basket/NAT-BST-014.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-015",
                                "path" => "assets/product/natural/Basket/NAT-BST-015.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-016",
                                "path" => "assets/product/natural/Basket/NAT-BST-016.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-017",
                                "path" => "assets/product/natural/Basket/NAT-BST-017.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-018",
                                "path" => "assets/product/natural/Basket/NAT-BST-018.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-019",
                                "path" => "assets/product/natural/Basket/NAT-BST-019.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-020",
                                "path" => "assets/product/natural/Basket/NAT-BST-020.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-021",
                                "path" => "assets/product/natural/Basket/NAT-BST-021.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-022",
                                "path" => "assets/product/natural/Basket/NAT-BST-022.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-023",
                                "path" => "assets/product/natural/Basket/NAT-BST-023.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-024",
                                "path" => "assets/product/natural/Basket/NAT-BST-024.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-025",
                                "path" => "assets/product/natural/Basket/NAT-BST-025.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-026",
                                "path" => "assets/product/natural/Basket/NAT-BST-026.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-027",
                                "path" => "assets/product/natural/Basket/NAT-BST-027.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-028",
                                "path" => "assets/product/natural/Basket/NAT-BST-028.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-029",
                                "path" => "assets/product/natural/Basket/NAT-BST-029.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-030",
                                "path" => "assets/product/natural/Basket/NAT-BST-030.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-031",
                                "path" => "assets/product/natural/Basket/NAT-BST-031.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-032",
                                "path" => "assets/product/natural/Basket/NAT-BST-032.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-033",
                                "path" => "assets/product/natural/Basket/NAT-BST-033.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-034",
                                "path" => "assets/product/natural/Basket/NAT-BST-034.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-035",
                                "path" => "assets/product/natural/Basket/NAT-BST-035.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-036",
                                "path" => "assets/product/natural/Basket/NAT-BST-036.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-037",
                                "path" => "assets/product/natural/Basket/NAT-BST-037.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-038",
                                "path" => "assets/product/natural/Basket/NAT-BST-038.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-039",
                                "path" => "assets/product/natural/Basket/NAT-BST-039.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-040",
                                "path" => "assets/product/natural/Basket/NAT-BST-040.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-041",
                                "path" => "assets/product/natural/Basket/NAT-BST-041.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-042",
                                "path" => "assets/product/natural/Basket/NAT-BST-042.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-043",
                                "path" => "assets/product/natural/Basket/NAT-BST-043.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-044",
                                "path" => "assets/product/natural/Basket/NAT-BST-044.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-045",
                                "path" => "assets/product/natural/Basket/NAT-BST-045.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-046",
                                "path" => "assets/product/natural/Basket/NAT-BST-046.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-047",
                                "path" => "assets/product/natural/Basket/NAT-BST-047.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-048",
                                "path" => "assets/product/natural/Basket/NAT-BST-048.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-049",
                                "path" => "assets/product/natural/Basket/NAT-BST-049.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-050",
                                "path" => "assets/product/natural/Basket/NAT-BST-050.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-051",
                                "path" => "assets/product/natural/Basket/NAT-BST-051.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-052",
                                "path" => "assets/product/natural/Basket/NAT-BST-052.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-053",
                                "path" => "assets/product/natural/Basket/NAT-BST-053.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-054",
                                "path" => "assets/product/natural/Basket/NAT-BST-054.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-055",
                                "path" => "assets/product/natural/Basket/NAT-BST-055.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-056",
                                "path" => "assets/product/natural/Basket/NAT-BST-056.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-057",
                                "path" => "assets/product/natural/Basket/NAT-BST-057.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-058",
                                "path" => "assets/product/natural/Basket/NAT-BST-058.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-059",
                                "path" => "assets/product/natural/Basket/NAT-BST-059.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-060",
                                "path" => "assets/product/natural/Basket/NAT-BST-060.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-061",
                                "path" => "assets/product/natural/Basket/NAT-BST-061.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-062",
                                "path" => "assets/product/natural/Basket/NAT-BST-062.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-063",
                                "path" => "assets/product/natural/Basket/NAT-BST-063.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-064",
                                "path" => "assets/product/natural/Basket/NAT-BST-064.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-065",
                                "path" => "assets/product/natural/Basket/NAT-BST-065.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-066",
                                "path" => "assets/product/natural/Basket/NAT-BST-066.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-067",
                                "path" => "assets/product/natural/Basket/NAT-BST-067.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-068",
                                "path" => "assets/product/natural/Basket/NAT-BST-068.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-069",
                                "path" => "assets/product/natural/Basket/NAT-BST-069.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-070",
                                "path" => "assets/product/natural/Basket/NAT-BST-070.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-071",
                                "path" => "assets/product/natural/Basket/NAT-BST-071.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-072",
                                "path" => "assets/product/natural/Basket/NAT-BST-072.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-073",
                                "path" => "assets/product/natural/Basket/NAT-BST-073.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-074",
                                "path" => "assets/product/natural/Basket/NAT-BST-074.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-075",
                                "path" => "assets/product/natural/Basket/NAT-BST-075.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-076",
                                "path" => "assets/product/natural/Basket/NAT-BST-076.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-077",
                                "path" => "assets/product/natural/Basket/NAT-BST-077.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-078",
                                "path" => "assets/product/natural/Basket/NAT-BST-078.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-079",
                                "path" => "assets/product/natural/Basket/NAT-BST-079.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-080",
                                "path" => "assets/product/natural/Basket/NAT-BST-080.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-081",
                                "path" => "assets/product/natural/Basket/NAT-BST-081.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-082",
                                "path" => "assets/product/natural/Basket/NAT-BST-082.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-083",
                                "path" => "assets/product/natural/Basket/NAT-BST-083.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-084",
                                "path" => "assets/product/natural/Basket/NAT-BST-084.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-085",
                                "path" => "assets/product/natural/Basket/NAT-BST-085.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-086",
                                "path" => "assets/product/natural/Basket/NAT-BST-086.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-087",
                                "path" => "assets/product/natural/Basket/NAT-BST-087.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-088",
                                "path" => "assets/product/natural/Basket/NAT-BST-088.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-089",
                                "path" => "assets/product/natural/Basket/NAT-BST-089.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-090",
                                "path" => "assets/product/natural/Basket/NAT-BST-090.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-091",
                                "path" => "assets/product/natural/Basket/NAT-BST-091.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-092",
                                "path" => "assets/product/natural/Basket/NAT-BST-092.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-093",
                                "path" => "assets/product/natural/Basket/NAT-BST-093.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-094",
                                "path" => "assets/product/natural/Basket/NAT-BST-094.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-095",
                                "path" => "assets/product/natural/Basket/NAT-BST-095.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-096",
                                "path" => "assets/product/natural/Basket/NAT-BST-096.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-097",
                                "path" => "assets/product/natural/Basket/NAT-BST-097.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-098",
                                "path" => "assets/product/natural/Basket/NAT-BST-098.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-099",
                                "path" => "assets/product/natural/Basket/NAT-BST-099.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-100",
                                "path" => "assets/product/natural/Basket/NAT-BST-100.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-101",
                                "path" => "assets/product/natural/Basket/NAT-BST-101.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-102",
                                "path" => "assets/product/natural/Basket/NAT-BST-102.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-103",
                                "path" => "assets/product/natural/Basket/NAT-BST-103.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-104",
                                "path" => "assets/product/natural/Basket/NAT-BST-104.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-105",
                                "path" => "assets/product/natural/Basket/NAT-BST-105.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-106",
                                "path" => "assets/product/natural/Basket/NAT-BST-106.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-107",
                                "path" => "assets/product/natural/Basket/NAT-BST-107.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-108",
                                "path" => "assets/product/natural/Basket/NAT-BST-108.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-109",
                                "path" => "assets/product/natural/Basket/NAT-BST-109.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-110",
                                "path" => "assets/product/natural/Basket/NAT-BST-110.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-111",
                                "path" => "assets/product/natural/Basket/NAT-BST-111.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-112",
                                "path" => "assets/product/natural/Basket/NAT-BST-112.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-113",
                                "path" => "assets/product/natural/Basket/NAT-BST-113.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-114",
                                "path" => "assets/product/natural/Basket/NAT-BST-114.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-115",
                                "path" => "assets/product/natural/Basket/NAT-BST-115.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-116",
                                "path" => "assets/product/natural/Basket/NAT-BST-116.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-117",
                                "path" => "assets/product/natural/Basket/NAT-BST-117.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-118",
                                "path" => "assets/product/natural/Basket/NAT-BST-118.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-119",
                                "path" => "assets/product/natural/Basket/NAT-BST-119.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-120",
                                "path" => "assets/product/natural/Basket/NAT-BST-120.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-121",
                                "path" => "assets/product/natural/Basket/NAT-BST-121.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-122",
                                "path" => "assets/product/natural/Basket/NAT-BST-122.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-123",
                                "path" => "assets/product/natural/Basket/NAT-BST-123.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-124",
                                "path" => "assets/product/natural/Basket/NAT-BST-124.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-125",
                                "path" => "assets/product/natural/Basket/NAT-BST-125.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-126",
                                "path" => "assets/product/natural/Basket/NAT-BST-126.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-127",
                                "path" => "assets/product/natural/Basket/NAT-BST-127.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-128",
                                "path" => "assets/product/natural/Basket/NAT-BST-128.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-129",
                                "path" => "assets/product/natural/Basket/NAT-BST-129.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-130",
                                "path" => "assets/product/natural/Basket/NAT-BST-130.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-131",
                                "path" => "assets/product/natural/Basket/NAT-BST-131.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-132",
                                "path" => "assets/product/natural/Basket/NAT-BST-132.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-133",
                                "path" => "assets/product/natural/Basket/NAT-BST-133.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-134",
                                "path" => "assets/product/natural/Basket/NAT-BST-134.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-135",
                                "path" => "assets/product/natural/Basket/NAT-BST-135.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-136",
                                "path" => "assets/product/natural/Basket/NAT-BST-136.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-137",
                                "path" => "assets/product/natural/Basket/NAT-BST-137.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-138",
                                "path" => "assets/product/natural/Basket/NAT-BST-138.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-139",
                                "path" => "assets/product/natural/Basket/NAT-BST-139.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-140",
                                "path" => "assets/product/natural/Basket/NAT-BST-140.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-141",
                                "path" => "assets/product/natural/Basket/NAT-BST-141.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-142",
                                "path" => "assets/product/natural/Basket/NAT-BST-142.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-143",
                                "path" => "assets/product/natural/Basket/NAT-BST-143.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-144",
                                "path" => "assets/product/natural/Basket/NAT-BST-144.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-145",
                                "path" => "assets/product/natural/Basket/NAT-BST-145.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-146",
                                "path" => "assets/product/natural/Basket/NAT-BST-146.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-147",
                                "path" => "assets/product/natural/Basket/NAT-BST-147.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-148",
                                "path" => "assets/product/natural/Basket/NAT-BST-148.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-149",
                                "path" => "assets/product/natural/Basket/NAT-BST-149.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-150",
                                "path" => "assets/product/natural/Basket/NAT-BST-150.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-151",
                                "path" => "assets/product/natural/Basket/NAT-BST-151.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-152",
                                "path" => "assets/product/natural/Basket/NAT-BST-152.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-153",
                                "path" => "assets/product/natural/Basket/NAT-BST-153.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-154",
                                "path" => "assets/product/natural/Basket/NAT-BST-154.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                            [
                                "name" => "NAT-BST-155",
                                "path" => "assets/product/natural/Basket/NAT-BST-155.png",
                                "url" => "assets/product/natural/Basket/",
                            ],
                        ],
                    ],
                    [
                        "name" => "Bassinet",
                        "data" => [
                            [
                                "name" => "IF-BSN-001",
                                "path" => "assets/product/natural/Bassinet/IF-BSN-001.png",
                                "url" => "assets/product/natural/Bassinet/",
                            ],
                            [
                                "name" => "IF-BSN-002",
                                "path" => "assets/product/natural/Bassinet/IF-BSN-002.png",
                                "url" => "assets/product/natural/Bassinet/",
                            ],
                            [
                                "name" => "IF-BSN-003",
                                "path" => "assets/product/natural/Bassinet/IF-BSN-003.png",
                                "url" => "assets/product/natural/Bassinet/",
                            ],
                            [
                                "name" => "IF-BSN-004",
                                "path" => "assets/product/natural/Bassinet/IF-BSN-004.png",
                                "url" => "assets/product/natural/Bassinet/",
                            ],
                            [
                                "name" => "IF-BSN-005",
                                "path" => "assets/product/natural/Bassinet/IF-BSN-005.png",
                                "url" => "assets/product/natural/Bassinet/",
                            ],
                            [
                                "name" => "IF-BSN-006",
                                "path" => "assets/product/natural/Bassinet/IF-BSN-006.png",
                                "url" => "assets/product/natural/Bassinet/",
                            ],
                            [
                                "name" => "IF-BSN-007",
                                "path" => "assets/product/natural/Bassinet/IF-BSN-007.png",
                                "url" => "assets/product/natural/Bassinet/",
                            ],
                            [
                                "name" => "IF-BSN-008",
                                "path" => "assets/product/natural/Bassinet/IF-BSN-008.png",
                                "url" => "assets/product/natural/Bassinet/",
                            ],
                        ],
                    ],
                    [
                        "name" => "Beach Chair",
                        "data" => [
                            [
                                "name" => "IF-BCH-001",
                                "path" => "assets/product/natural/Beach Chair/IF-BCH-001.png",
                                "url" => "assets/product/natural/Beach Chair/",
                            ],
                            [
                                "name" => "IF-BCH-002",
                                "path" => "assets/product/natural/Beach Chair/IF-BCH-002.png",
                                "url" => "assets/product/natural/Beach Chair/",
                            ],
                            [
                                "name" => "IF-BCH-003",
                                "path" => "assets/product/natural/Beach Chair/IF-BCH-003.png",
                                "url" => "assets/product/natural/Beach Chair/",
                            ],
                            [
                                "name" => "IF-BCH-004",
                                "path" => "assets/product/natural/Beach Chair/IF-BCH-004.png",
                                "url" => "assets/product/natural/Beach Chair/",
                            ],
                            [
                                "name" => "IF-BCH-005",
                                "path" => "assets/product/natural/Beach Chair/IF-BCH-005.png",
                                "url" => "assets/product/natural/Beach Chair/",
                            ],
                            [
                                "name" => "IF-BCH-006",
                                "path" => "assets/product/natural/Beach Chair/IF-BCH-006.png",
                                "url" => "assets/product/natural/Beach Chair/",
                            ],
                            [
                                "name" => "IF-BCH-007",
                                "path" => "assets/product/natural/Beach Chair/IF-BCH-007.png",
                                "url" => "assets/product/natural/Beach Chair/",
                            ],
                            [
                                "name" => "IF-BCH-008",
                                "path" => "assets/product/natural/Beach Chair/IF-BCH-008.png",
                                "url" => "assets/product/natural/Beach Chair/",
                            ],
                        ],
                    ],
                    [
                        "name" => "Bistro",
                        "data" => [
                            [
                                "name" => "IF-BIS-001",
                                "path" => "assets/product/natural/BISTRO/IF-BIS-001.png",
                                "url" => "assets/product/natural/BISTRO/",
                            ],
                            [
                                "name" => "IF-BIS-002",
                                "path" => "assets/product/natural/BISTRO/IF-BIS-002.png",
                                "url" => "assets/product/natural/BISTRO/",
                            ],
                            [
                                "name" => "IF-BIS-003",
                                "path" => "assets/product/natural/BISTRO/IF-BIS-003.png",
                                "url" => "assets/product/natural/BISTRO/",
                            ],
                            [
                                "name" => "IF-BIS-004",
                                "path" => "assets/product/natural/BISTRO/IF-BIS-004.png",
                                "url" => "assets/product/natural/BISTRO/",
                            ],
                            [
                                "name" => "IF-BIS-005",
                                "path" => "assets/product/natural/BISTRO/IF-BIS-005.png",
                                "url" => "assets/product/natural/BISTRO/",
                            ],
                            [
                                "name" => "IF-BIS-006",
                                "path" => "assets/product/natural/BISTRO/IF-BIS-006.png",
                                "url" => "assets/product/natural/BISTRO/",
                            ],
                            [
                                "name" => "IF-BIS-007",
                                "path" => "assets/product/natural/BISTRO/IF-BIS-007.png",
                                "url" => "assets/product/natural/BISTRO/",
                            ],
                            [
                                "name" => "IF-BIS-008",
                                "path" => "assets/product/natural/BISTRO/IF-BIS-008.png",
                                "url" => "assets/product/natural/BISTRO/",
                            ],
                            [
                                "name" => "IF-BIS-009",
                                "path" => "assets/product/natural/BISTRO/IF-BIS-009.png",
                                "url" => "assets/product/natural/BISTRO/",
                            ],
                            [
                                "name" => "IF-BIS-010",
                                "path" => "assets/product/natural/BISTRO/IF-BIS-010.png",
                                "url" => "assets/product/natural/BISTRO/",
                            ],
                            [
                                "name" => "IF-BIS-011",
                                "path" => "assets/product/natural/BISTRO/IF-BIS-011.png",
                                "url" => "assets/product/natural/BISTRO/",
                            ],
                            [
                                "name" => "IF-BIS-012",
                                "path" => "assets/product/natural/BISTRO/IF-BIS-012.png",
                                "url" => "assets/product/natural/BISTRO/",
                            ],
                            [
                                "name" => "IF-BIS-013",
                                "path" => "assets/product/natural/BISTRO/IF-BIS-013.png",
                                "url" => "assets/product/natural/BISTRO/",
                            ],
                            [
                                "name" => "IF-BIS-014",
                                "path" => "assets/product/natural/BISTRO/IF-BIS-014.png",
                                "url" => "assets/product/natural/BISTRO/",
                            ],
                            [
                                "name" => "IF-BIS-015",
                                "path" => "assets/product/natural/BISTRO/IF-BIS-015.png",
                                "url" => "assets/product/natural/BISTRO/",
                            ],
                            [
                                "name" => "IF-BIS-016",
                                "path" => "assets/product/natural/BISTRO/IF-BIS-016.png",
                                "url" => "assets/product/natural/BISTRO/",
                            ],
                            [
                                "name" => "IF-BIS-017",
                                "path" => "assets/product/natural/BISTRO/IF-BIS-017.png",
                                "url" => "assets/product/natural/BISTRO/",
                            ],
                            [
                                "name" => "IF-BIS-018",
                                "path" => "assets/product/natural/BISTRO/IF-BIS-018.png",
                                "url" => "assets/product/natural/BISTRO/",
                            ],
                            [
                                "name" => "IF-BIS-019",
                                "path" => "assets/product/natural/BISTRO/IF-BIS-019.png",
                                "url" => "assets/product/natural/BISTRO/",
                            ],
                            [
                                "name" => "IF-BIS-020",
                                "path" => "assets/product/natural/BISTRO/IF-BIS-020.png",
                                "url" => "assets/product/natural/BISTRO/",
                            ],
                            [
                                "name" => "IF-BIS-021",
                                "path" => "assets/product/natural/BISTRO/IF-BIS-021.png",
                                "url" => "assets/product/natural/BISTRO/",
                            ],
                            [
                                "name" => "IF-BIS-022",
                                "path" => "assets/product/natural/BISTRO/IF-BIS-022.png",
                                "url" => "assets/product/natural/BISTRO/",
                            ],
                            [
                                "name" => "IF-BIS-023",
                                "path" => "assets/product/natural/BISTRO/IF-BIS-023.png",
                                "url" => "assets/product/natural/BISTRO/",
                            ],
                            [
                                "name" => "IF-BIS-024",
                                "path" => "assets/product/natural/BISTRO/IF-BIS-024.png",
                                "url" => "assets/product/natural/BISTRO/",
                            ],
                            [
                                "name" => "IF-BIS-025",
                                "path" => "assets/product/natural/BISTRO/IF-BIS-025.png",
                                "url" => "assets/product/natural/BISTRO/",
                            ],
                            [
                                "name" => "IF-BIS-026",
                                "path" => "assets/product/natural/BISTRO/IF-BIS-026.png",
                                "url" => "assets/product/natural/BISTRO/",
                            ],
                            [
                                "name" => "IF-BIS-027",
                                "path" => "assets/product/natural/BISTRO/IF-BIS-027.png",
                                "url" => "assets/product/natural/BISTRO/",
                            ],
                            [
                                "name" => "IF-BIS-028",
                                "path" => "assets/product/natural/BISTRO/IF-BIS-028.png",
                                "url" => "assets/product/natural/BISTRO/",
                            ],
                            [
                                "name" => "IF-BIS-029",
                                "path" => "assets/product/natural/BISTRO/IF-BIS-029.png",
                                "url" => "assets/product/natural/BISTRO/",
                            ],
                            [
                                "name" => "IF-BIS-030",
                                "path" => "assets/product/natural/BISTRO/IF-BIS-030.png",
                                "url" => "assets/product/natural/BISTRO/",
                            ],
                            [
                                "name" => "IF-BIS-031",
                                "path" => "assets/product/natural/BISTRO/IF-BIS-031.png",
                                "url" => "assets/product/natural/BISTRO/",
                            ],
                            [
                                "name" => "IF-BIS-032",
                                "path" => "assets/product/natural/BISTRO/IF-BIS-032.png",
                                "url" => "assets/product/natural/BISTRO/",
                            ],
                            [
                                "name" => "IF-BIS-033",
                                "path" => "assets/product/natural/BISTRO/IF-BIS-033.png",
                                "url" => "assets/product/natural/BISTRO/",
                            ],
                            [
                                "name" => "IF-BIS-034",
                                "path" => "assets/product/natural/BISTRO/IF-BIS-034.png",
                                "url" => "assets/product/natural/BISTRO/",
                            ],
                            [
                                "name" => "IF-BIS-035",
                                "path" => "assets/product/natural/BISTRO/IF-BIS-035.png",
                                "url" => "assets/product/natural/BISTRO/",
                            ],
                            [
                                "name" => "IF-BIS-036",
                                "path" => "assets/product/natural/BISTRO/IF-BIS-036.png",
                                "url" => "assets/product/natural/BISTRO/",
                            ],
                            [
                                "name" => "IF-BIS-037",
                                "path" => "assets/product/natural/BISTRO/IF-BIS-037.png",
                                "url" => "assets/product/natural/BISTRO/",
                            ],
                            [
                                "name" => "IF-BIS-038",
                                "path" => "assets/product/natural/BISTRO/IF-BIS-038.png",
                                "url" => "assets/product/natural/BISTRO/",
                            ],
                            [
                                "name" => "IF-BIS-039",
                                "path" => "assets/product/natural/BISTRO/IF-BIS-039.png",
                                "url" => "assets/product/natural/BISTRO/",
                            ],
                            [
                                "name" => "IF-BIS-040",
                                "path" => "assets/product/natural/BISTRO/IF-BIS-040.png",
                                "url" => "assets/product/natural/BISTRO/",
                            ],
                            [
                                "name" => "IF-BIS-041",
                                "path" => "assets/product/natural/BISTRO/IF-BIS-041.png",
                                "url" => "assets/product/natural/BISTRO/",
                            ],
                            [
                                "name" => "IF-BIS-042",
                                "path" => "assets/product/natural/BISTRO/IF-BIS-042.png",
                                "url" => "assets/product/natural/BISTRO/",
                            ],
                            [
                                "name" => "IF-BIS-043",
                                "path" => "assets/product/natural/BISTRO/IF-BIS-043.png",
                                "url" => "assets/product/natural/BISTRO/",
                            ],
                            [
                                "name" => "IF-BIS-044",
                                "path" => "assets/product/natural/BISTRO/IF-BIS-044.png",
                                "url" => "assets/product/natural/BISTRO/",
                            ],
                            [
                                "name" => "IF-BIS-045",
                                "path" => "assets/product/natural/BISTRO/IF-BIS-045.png",
                                "url" => "assets/product/natural/BISTRO/",
                            ],
                            [
                                "name" => "IF-BIS-046",
                                "path" => "assets/product/natural/BISTRO/IF-BIS-046.png",
                                "url" => "assets/product/natural/BISTRO/",
                            ],
                            [
                                "name" => "IF-BIS-047",
                                "path" => "assets/product/natural/BISTRO/IF-BIS-047.png",
                                "url" => "assets/product/natural/BISTRO/",
                            ],
                        ],
                    ],
                    [
                        "name" => "Cabinet",
                        "data" => [
                            [
                                "name" => "IF-CBN-001",
                                "path" => "assets/product/natural/Cabinet/IF-CBN-001.png",
                                "url" => "assets/product/natural/Cabinet/",
                            ],
                            [
                                "name" => "IF-CBN-002",
                                "path" => "assets/product/natural/Cabinet/IF-CBN-002.png",
                                "url" => "assets/product/natural/Cabinet/",
                            ],
                            [
                                "name" => "IF-CBN-003",
                                "path" => "assets/product/natural/Cabinet/IF-CBN-003.png",
                                "url" => "assets/product/natural/Cabinet/",
                            ],
                            [
                                "name" => "IF-CBN-004",
                                "path" => "assets/product/natural/Cabinet/IF-CBN-004.png",
                                "url" => "assets/product/natural/Cabinet/",
                            ],
                            [
                                "name" => "IF-CBN-005",
                                "path" => "assets/product/natural/Cabinet/IF-CBN-005.png",
                                "url" => "assets/product/natural/Cabinet/",
                            ],
                            [
                                "name" => "IF-CBN-006",
                                "path" => "assets/product/natural/Cabinet/IF-CBN-006.png",
                                "url" => "assets/product/natural/Cabinet/",
                            ],
                            [
                                "name" => "IF-CBN-007",
                                "path" => "assets/product/natural/Cabinet/IF-CBN-007.png",
                                "url" => "assets/product/natural/Cabinet/",
                            ],
                            [
                                "name" => "IF-CBN-008",
                                "path" => "assets/product/natural/Cabinet/IF-CBN-008.png",
                                "url" => "assets/product/natural/Cabinet/",
                            ],
                            [
                                "name" => "IF-CBN-009",
                                "path" => "assets/product/natural/Cabinet/IF-CBN-009.png",
                                "url" => "assets/product/natural/Cabinet/",
                            ],
                            [
                                "name" => "IF-CBN-010",
                                "path" => "assets/product/natural/Cabinet/IF-CBN-010.png",
                                "url" => "assets/product/natural/Cabinet/",
                            ],
                            [
                                "name" => "IF-CBN-011",
                                "path" => "assets/product/natural/Cabinet/IF-CBN-011.png",
                                "url" => "assets/product/natural/Cabinet/",
                            ],
                            [
                                "name" => "IF-CBN-012",
                                "path" => "assets/product/natural/Cabinet/IF-CBN-012.png",
                                "url" => "assets/product/natural/Cabinet/",
                            ],
                            [
                                "name" => "IF-CBN-013",
                                "path" => "assets/product/natural/Cabinet/IF-CBN-013.png",
                                "url" => "assets/product/natural/Cabinet/",
                            ],
                            [
                                "name" => "IF-CBN-014",
                                "path" => "assets/product/natural/Cabinet/IF-CBN-014.png",
                                "url" => "assets/product/natural/Cabinet/",
                            ],
                            [
                                "name" => "IF-CBN-015",
                                "path" => "assets/product/natural/Cabinet/IF-CBN-015.png",
                                "url" => "assets/product/natural/Cabinet/",
                            ],
                            [
                                "name" => "IF-CBN-016",
                                "path" => "assets/product/natural/Cabinet/IF-CBN-016.png",
                                "url" => "assets/product/natural/Cabinet/",
                            ],
                            [
                                "name" => "IF-CBN-017",
                                "path" => "assets/product/natural/Cabinet/IF-CBN-017.png",
                                "url" => "assets/product/natural/Cabinet/",
                            ],
                            [
                                "name" => "IF-CBN-018",
                                "path" => "assets/product/natural/Cabinet/IF-CBN-018.png",
                                "url" => "assets/product/natural/Cabinet/",
                            ],
                            [
                                "name" => "IF-CBN-019",
                                "path" => "assets/product/natural/Cabinet/IF-CBN-019.png",
                                "url" => "assets/product/natural/Cabinet/",
                            ],
                            [
                                "name" => "IF-CBN-020",
                                "path" => "assets/product/natural/Cabinet/IF-CBN-020.png",
                                "url" => "assets/product/natural/Cabinet/",
                            ],
                            [
                                "name" => "IF-CBN-021",
                                "path" => "assets/product/natural/Cabinet/IF-CBN-021.png",
                                "url" => "assets/product/natural/Cabinet/",
                            ],
                            [
                                "name" => "IF-CBN-022",
                                "path" => "assets/product/natural/Cabinet/IF-CBN-022.png",
                                "url" => "assets/product/natural/Cabinet/",
                            ],
                            [
                                "name" => "IF-CBN-023",
                                "path" => "assets/product/natural/Cabinet/IF-CBN-023.png",
                                "url" => "assets/product/natural/Cabinet/",
                            ],
                            [
                                "name" => "IF-CBN-024",
                                "path" => "assets/product/natural/Cabinet/IF-CBN-024.png",
                                "url" => "assets/product/natural/Cabinet/",
                            ],
                            [
                                "name" => "IF-CBN-025",
                                "path" => "assets/product/natural/Cabinet/IF-CBN-025.png",
                                "url" => "assets/product/natural/Cabinet/",
                            ],
                            [
                                "name" => "IF-CBN-026",
                                "path" => "assets/product/natural/Cabinet/IF-CBN-026.png",
                                "url" => "assets/product/natural/Cabinet/",
                            ],
                            [
                                "name" => "IF-CBN-027",
                                "path" => "assets/product/natural/Cabinet/IF-CBN-027.png",
                                "url" => "assets/product/natural/Cabinet/",
                            ],
                            [
                                "name" => "IF-CBN-028",
                                "path" => "assets/product/natural/Cabinet/IF-CBN-028.png",
                                "url" => "assets/product/natural/Cabinet/",
                            ],
                            [
                                "name" => "IF-CBN-029",
                                "path" => "assets/product/natural/Cabinet/IF-CBN-029.png",
                                "url" => "assets/product/natural/Cabinet/",
                            ],
                            [
                                "name" => "IF-CBN-030",
                                "path" => "assets/product/natural/Cabinet/IF-CBN-030.png",
                                "url" => "assets/product/natural/Cabinet/",
                            ],
                            [
                                "name" => "IF-CBN-031",
                                "path" => "assets/product/natural/Cabinet/IF-CBN-031.png",
                                "url" => "assets/product/natural/Cabinet/",
                            ],
                            [
                                "name" => "IF-CBN-032",
                                "path" => "assets/product/natural/Cabinet/IF-CBN-032.png",
                                "url" => "assets/product/natural/Cabinet/",
                            ],
                            [
                                "name" => "IF-CBN-033",
                                "path" => "assets/product/natural/Cabinet/IF-CBN-033.png",
                                "url" => "assets/product/natural/Cabinet/",
                            ],
                            [
                                "name" => "IF-CBN-034",
                                "path" => "assets/product/natural/Cabinet/IF-CBN-034.png",
                                "url" => "assets/product/natural/Cabinet/",
                            ],
                            [
                                "name" => "IF-CBN-035",
                                "path" => "assets/product/natural/Cabinet/IF-CBN-035.png",
                                "url" => "assets/product/natural/Cabinet/",
                            ],
                            [
                                "name" => "IF-CBN-036",
                                "path" => "assets/product/natural/Cabinet/IF-CBN-036.png",
                                "url" => "assets/product/natural/Cabinet/",
                            ],
                            [
                                "name" => "IF-CBN-037",
                                "path" => "assets/product/natural/Cabinet/IF-CBN-037.png",
                                "url" => "assets/product/natural/Cabinet/",
                            ],
                            [
                                "name" => "IF-CBN-038",
                                "path" => "assets/product/natural/Cabinet/IF-CBN-038.png",
                                "url" => "assets/product/natural/Cabinet/",
                            ],
                            [
                                "name" => "IF-CBN-039",
                                "path" => "assets/product/natural/Cabinet/IF-CBN-039.png",
                                "url" => "assets/product/natural/Cabinet/",
                            ],
                            [
                                "name" => "IF-CBN-040",
                                "path" => "assets/product/natural/Cabinet/IF-CBN-040.png",
                                "url" => "assets/product/natural/Cabinet/",
                            ],
                            [
                                "name" => "IF-CBN-041",
                                "path" => "assets/product/natural/Cabinet/IF-CBN-041.png",
                                "url" => "assets/product/natural/Cabinet/",
                            ],
                            [
                                "name" => "IF-CBN-042",
                                "path" => "assets/product/natural/Cabinet/IF-CBN-042.png",
                                "url" => "assets/product/natural/Cabinet/",
                            ],
                            [
                                "name" => "IF-CBN-043",
                                "path" => "assets/product/natural/Cabinet/IF-CBN-043.png",
                                "url" => "assets/product/natural/Cabinet/",
                            ],
                        ],
                    ],
                    [
                        "name" => "Chair",
                        "data" => [
                            [
                                "name" => "IF-CHR-001",
                                "path" => "assets/product/natural/Chair/IF-CHR-001.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-002",
                                "path" => "assets/product/natural/Chair/IF-CHR-002.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-003",
                                "path" => "assets/product/natural/Chair/IF-CHR-003.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-004",
                                "path" => "assets/product/natural/Chair/IF-CHR-004.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-005",
                                "path" => "assets/product/natural/Chair/IF-CHR-005.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-006",
                                "path" => "assets/product/natural/Chair/IF-CHR-006.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-007",
                                "path" => "assets/product/natural/Chair/IF-CHR-007.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-008",
                                "path" => "assets/product/natural/Chair/IF-CHR-008.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-009",
                                "path" => "assets/product/natural/Chair/IF-CHR-009.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-010",
                                "path" => "assets/product/natural/Chair/IF-CHR-010.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-011",
                                "path" => "assets/product/natural/Chair/IF-CHR-011.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-012",
                                "path" => "assets/product/natural/Chair/IF-CHR-012.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-013",
                                "path" => "assets/product/natural/Chair/IF-CHR-013.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-014",
                                "path" => "assets/product/natural/Chair/IF-CHR-014.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-015",
                                "path" => "assets/product/natural/Chair/IF-CHR-015.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-016",
                                "path" => "assets/product/natural/Chair/IF-CHR-016.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-017",
                                "path" => "assets/product/natural/Chair/IF-CHR-017.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-018",
                                "path" => "assets/product/natural/Chair/IF-CHR-018.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-019",
                                "path" => "assets/product/natural/Chair/IF-CHR-019.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-020",
                                "path" => "assets/product/natural/Chair/IF-CHR-020.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-021",
                                "path" => "assets/product/natural/Chair/IF-CHR-021.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-022",
                                "path" => "assets/product/natural/Chair/IF-CHR-022.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-023",
                                "path" => "assets/product/natural/Chair/IF-CHR-023.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-024",
                                "path" => "assets/product/natural/Chair/IF-CHR-024.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-025",
                                "path" => "assets/product/natural/Chair/IF-CHR-025.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-026",
                                "path" => "assets/product/natural/Chair/IF-CHR-026.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-027",
                                "path" => "assets/product/natural/Chair/IF-CHR-027.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-028",
                                "path" => "assets/product/natural/Chair/IF-CHR-028.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-029",
                                "path" => "assets/product/natural/Chair/IF-CHR-029.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-030",
                                "path" => "assets/product/natural/Chair/IF-CHR-030.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-031",
                                "path" => "assets/product/natural/Chair/IF-CHR-031.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-032",
                                "path" => "assets/product/natural/Chair/IF-CHR-032.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-033",
                                "path" => "assets/product/natural/Chair/IF-CHR-033.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-034",
                                "path" => "assets/product/natural/Chair/IF-CHR-034.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-035",
                                "path" => "assets/product/natural/Chair/IF-CHR-035.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-036",
                                "path" => "assets/product/natural/Chair/IF-CHR-036.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-037",
                                "path" => "assets/product/natural/Chair/IF-CHR-037.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-038",
                                "path" => "assets/product/natural/Chair/IF-CHR-038.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-039",
                                "path" => "assets/product/natural/Chair/IF-CHR-039.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-040",
                                "path" => "assets/product/natural/Chair/IF-CHR-040.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-041",
                                "path" => "assets/product/natural/Chair/IF-CHR-041.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-042",
                                "path" => "assets/product/natural/Chair/IF-CHR-042.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-043",
                                "path" => "assets/product/natural/Chair/IF-CHR-043.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-044",
                                "path" => "assets/product/natural/Chair/IF-CHR-044.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-045",
                                "path" => "assets/product/natural/Chair/IF-CHR-045.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-046",
                                "path" => "assets/product/natural/Chair/IF-CHR-046.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-047",
                                "path" => "assets/product/natural/Chair/IF-CHR-047.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-048",
                                "path" => "assets/product/natural/Chair/IF-CHR-048.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-049",
                                "path" => "assets/product/natural/Chair/IF-CHR-049.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-050",
                                "path" => "assets/product/natural/Chair/IF-CHR-050.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-051",
                                "path" => "assets/product/natural/Chair/IF-CHR-051.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-052",
                                "path" => "assets/product/natural/Chair/IF-CHR-052.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-053",
                                "path" => "assets/product/natural/Chair/IF-CHR-053.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-054",
                                "path" => "assets/product/natural/Chair/IF-CHR-054.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-055",
                                "path" => "assets/product/natural/Chair/IF-CHR-055.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-056",
                                "path" => "assets/product/natural/Chair/IF-CHR-056.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-057",
                                "path" => "assets/product/natural/Chair/IF-CHR-057.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-058",
                                "path" => "assets/product/natural/Chair/IF-CHR-058.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                            [
                                "name" => "IF-CHR-059",
                                "path" => "assets/product/natural/Chair/IF-CHR-059.png",
                                "url" => "assets/product/natural/Chair/",
                            ],
                        ],
                    ],
                    [
                        "name" => "Divider",
                        "data" => [
                            [
                                "name" => "IF-DIV-001",
                                "path" => "assets/product/natural/Divider/IF-DIV-001.png",
                                "url" => "assets/product/natural/Divider/",
                            ],
                            [
                                "name" => "IF-DIV-002",
                                "path" => "assets/product/natural/Divider/IF-DIV-002.png",
                                "url" => "assets/product/natural/Divider/",
                            ],
                            [
                                "name" => "IF-DIV-003",
                                "path" => "assets/product/natural/Divider/IF-DIV-003.png",
                                "url" => "assets/product/natural/Divider/",
                            ],
                            [
                                "name" => "IF-DIV-004",
                                "path" => "assets/product/natural/Divider/IF-DIV-004.png",
                                "url" => "assets/product/natural/Divider/",
                            ],
                            [
                                "name" => "IF-DIV-005",
                                "path" => "assets/product/natural/Divider/IF-DIV-005.png",
                                "url" => "assets/product/natural/Divider/",
                            ],
                            [
                                "name" => "IF-DIV-006",
                                "path" => "assets/product/natural/Divider/IF-DIV-006.png",
                                "url" => "assets/product/natural/Divider/",
                            ],
                            [
                                "name" => "IF-DIV-007",
                                "path" => "assets/product/natural/Divider/IF-DIV-007.png",
                                "url" => "assets/product/natural/Divider/",
                            ],
                            [
                                "name" => "IF-DIV-008",
                                "path" => "assets/product/natural/Divider/IF-DIV-008.png",
                                "url" => "assets/product/natural/Divider/",
                            ],
                        ],
                    ],
                    [
                        "name" => "Dog Bed",
                        "data" => [
                            [
                                "name" => "IF-PET-001",
                                "path" => "assets/product/natural/Dog Bed/IF-PET-001.png",
                                "url" => "assets/product/natural/Dog Bed/",
                            ],
                            [
                                "name" => "IF-PET-002",
                                "path" => "assets/product/natural/Dog Bed/IF-PET-002.png",
                                "url" => "assets/product/natural/Dog Bed/",
                            ],
                            [
                                "name" => "IF-PET-003",
                                "path" => "assets/product/natural/Dog Bed/IF-PET-003.png",
                                "url" => "assets/product/natural/Dog Bed/",
                            ],
                            [
                                "name" => "IF-PET-004",
                                "path" => "assets/product/natural/Dog Bed/IF-PET-004.png",
                                "url" => "assets/product/natural/Dog Bed/",
                            ],
                            [
                                "name" => "IF-PET-005",
                                "path" => "assets/product/natural/Dog Bed/IF-PET-005.png",
                                "url" => "assets/product/natural/Dog Bed/",
                            ],
                            [
                                "name" => "IF-PET-006",
                                "path" => "assets/product/natural/Dog Bed/IF-PET-006.png",
                                "url" => "assets/product/natural/Dog Bed/",
                            ],
                            [
                                "name" => "IF-PET-007",
                                "path" => "assets/product/natural/Dog Bed/IF-PET-007.png",
                                "url" => "assets/product/natural/Dog Bed/",
                            ],
                            [
                                "name" => "IF-PET-008",
                                "path" => "assets/product/natural/Dog Bed/IF-PET-008.png",
                                "url" => "assets/product/natural/Dog Bed/",
                            ],
                        ],
                    ],
                    [
                        "name" => "Hanging Chair",
                        "data" => [
                            [
                                "name" => "IF-HGG-001",
                                "path" => "assets/product/natural/Hanging Chair/IF-HGG-001.png",
                                "url" => "assets/product/natural/Hanging Chair/",
                            ],
                            [
                                "name" => "IF-HGG-002",
                                "path" => "assets/product/natural/Hanging Chair/IF-HGG-002.png",
                                "url" => "assets/product/natural/Hanging Chair/",
                            ],
                            [
                                "name" => "IF-HGG-003",
                                "path" => "assets/product/natural/Hanging Chair/IF-HGG-003.png",
                                "url" => "assets/product/natural/Hanging Chair/",
                            ],
                            [
                                "name" => "IF-HGG-004",
                                "path" => "assets/product/natural/Hanging Chair/IF-HGG-004.png",
                                "url" => "assets/product/natural/Hanging Chair/",
                            ],
                            [
                                "name" => "IF-HGG-005",
                                "path" => "assets/product/natural/Hanging Chair/IF-HGG-005.png",
                                "url" => "assets/product/natural/Hanging Chair/",
                            ],
                            [
                                "name" => "IF-HGG-006",
                                "path" => "assets/product/natural/Hanging Chair/IF-HGG-006.png",
                                "url" => "assets/product/natural/Hanging Chair/",
                            ],
                            [
                                "name" => "IF-HGG-007",
                                "path" => "assets/product/natural/Hanging Chair/IF-HGG-007.png",
                                "url" => "assets/product/natural/Hanging Chair/",
                            ],
                        ],
                    ],
                    [
                        "name" => "Head Board",
                        "data" => [
                            [
                                "name" => "IF-HBD-001",
                                "path" => "assets/product/natural/Headboard/IF-HBD-001.png",
                                "url" => "assets/product/natural/Headboard/",
                            ],
                            [
                                "name" => "IF-HBD-002",
                                "path" => "assets/product/natural/Headboard/IF-HBD-002.png",
                                "url" => "assets/product/natural/Headboard/",
                            ],
                            [
                                "name" => "IF-HBD-003",
                                "path" => "assets/product/natural/Headboard/IF-HBD-003.png",
                                "url" => "assets/product/natural/Headboard/",
                            ],
                            [
                                "name" => "IF-HBD-004",
                                "path" => "assets/product/natural/Headboard/IF-HBD-004.png",
                                "url" => "assets/product/natural/Headboard/",
                            ],
                            [
                                "name" => "IF-HBD-005",
                                "path" => "assets/product/natural/Headboard/IF-HBD-005.png",
                                "url" => "assets/product/natural/Headboard/",
                            ],
                            [
                                "name" => "IF-HBD-006",
                                "path" => "assets/product/natural/Headboard/IF-HBD-006.png",
                                "url" => "assets/product/natural/Headboard/",
                            ],
                            [
                                "name" => "IF-HBD-007",
                                "path" => "assets/product/natural/Headboard/IF-HBD-007.png",
                                "url" => "assets/product/natural/Headboard/",
                            ],
                            [
                                "name" => "IF-HBD-008",
                                "path" => "assets/product/natural/Headboard/IF-HBD-008.png",
                                "url" => "assets/product/natural/Headboard/",
                            ],
                            [
                                "name" => "IF-HBD-009",
                                "path" => "assets/product/natural/Headboard/IF-HBD-009.png",
                                "url" => "assets/product/natural/Headboard/",
                            ],
                            [
                                "name" => "IF-HBD-010",
                                "path" => "assets/product/natural/Headboard/IF-HBD-010.png",
                                "url" => "assets/product/natural/Headboard/",
                            ],
                            [
                                "name" => "IF-HBD-011",
                                "path" => "assets/product/natural/Headboard/IF-HBD-011.png",
                                "url" => "assets/product/natural/Headboard/",
                            ],
                            [
                                "name" => "IF-HBD-012",
                                "path" => "assets/product/natural/Headboard/IF-HBD-012.png",
                                "url" => "assets/product/natural/Headboard/",
                            ],
                            [
                                "name" => "IF-HBD-013",
                                "path" => "assets/product/natural/Headboard/IF-HBD-013.png",
                                "url" => "assets/product/natural/Headboard/",
                            ],
                            [
                                "name" => "IF-HBD-014",
                                "path" => "assets/product/natural/Headboard/IF-HBD-014.png",
                                "url" => "assets/product/natural/Headboard/",
                            ],
                            [
                                "name" => "IF-HBD-015",
                                "path" => "assets/product/natural/Headboard/IF-HBD-015.png",
                                "url" => "assets/product/natural/Headboard/",
                            ],
                            [
                                "name" => "IF-HBD-016",
                                "path" => "assets/product/natural/Headboard/IF-HBD-016.png",
                                "url" => "assets/product/natural/Headboard/",
                            ],
                            [
                                "name" => "IF-HBD-017",
                                "path" => "assets/product/natural/Headboard/IF-HBD-017.png",
                                "url" => "assets/product/natural/Headboard/",
                            ],
                            [
                                "name" => "IF-HBD-018",
                                "path" => "assets/product/natural/Headboard/IF-HBD-018.png",
                                "url" => "assets/product/natural/Headboard/",
                            ],
                            [
                                "name" => "IF-HBD-019",
                                "path" => "assets/product/natural/Headboard/IF-HBD-019.png",
                                "url" => "assets/product/natural/Headboard/",
                            ],
                            [
                                "name" => "IF-HBD-020",
                                "path" => "assets/product/natural/Headboard/IF-HBD-020.png",
                                "url" => "assets/product/natural/Headboard/",
                            ],
                            [
                                "name" => "IF-HBD-021",
                                "path" => "assets/product/natural/Headboard/IF-HBD-021.png",
                                "url" => "assets/product/natural/Headboard/",
                            ],
                            [
                                "name" => "IF-HBD-022",
                                "path" => "assets/product/natural/Headboard/IF-HBD-022.png",
                                "url" => "assets/product/natural/Headboard/",
                            ],
                            [
                                "name" => "IF-HBD-023",
                                "path" => "assets/product/natural/Headboard/IF-HBD-023.png",
                                "url" => "assets/product/natural/Headboard/",
                            ],
                            [
                                "name" => "IF-HBD-024",
                                "path" => "assets/product/natural/Headboard/IF-HBD-024.png",
                                "url" => "assets/product/natural/Headboard/",
                            ],
                            [
                                "name" => "IF-HBD-025",
                                "path" => "assets/product/natural/Headboard/IF-HBD-025.png",
                                "url" => "assets/product/natural/Headboard/",
                            ],
                            [
                                "name" => "IF-HBD-026",
                                "path" => "assets/product/natural/Headboard/IF-HBD-026.png",
                                "url" => "assets/product/natural/Headboard/",
                            ],
                            [
                                "name" => "IF-HBD-027",
                                "path" => "assets/product/natural/Headboard/IF-HBD-027.png",
                                "url" => "assets/product/natural/Headboard/",
                            ],
                            [
                                "name" => "IF-HBD-028",
                                "path" => "assets/product/natural/Headboard/IF-HBD-028.png",
                                "url" => "assets/product/natural/Headboard/",
                            ],
                            [
                                "name" => "IF-HBD-029",
                                "path" => "assets/product/natural/Headboard/IF-HBD-029.png",
                                "url" => "assets/product/natural/Headboard/",
                            ],
                            [
                                "name" => "IF-HBD-030",
                                "path" => "assets/product/natural/Headboard/IF-HBD-030.png",
                                "url" => "assets/product/natural/Headboard/",
                            ],
                            [
                                "name" => "IF-HBD-031",
                                "path" => "assets/product/natural/Headboard/IF-HBD-031.png",
                                "url" => "assets/product/natural/Headboard/",
                            ],
                            [
                                "name" => "IF-HBD-032",
                                "path" => "assets/product/natural/Headboard/IF-HBD-032.png",
                                "url" => "assets/product/natural/Headboard/",
                            ],
                            [
                                "name" => "IF-HBD-033",
                                "path" => "assets/product/natural/Headboard/IF-HBD-033.png",
                                "url" => "assets/product/natural/Headboard/",
                            ],
                            [
                                "name" => "IF-HBD-034",
                                "path" => "assets/product/natural/Headboard/IF-HBD-034.png",
                                "url" => "assets/product/natural/Headboard/",
                            ],
                            [
                                "name" => "IF-HBD-035",
                                "path" => "assets/product/natural/Headboard/IF-HBD-035.png",
                                "url" => "assets/product/natural/Headboard/",
                            ],
                            [
                                "name" => "IF-HBD-036",
                                "path" => "assets/product/natural/Headboard/IF-HBD-036.png",
                                "url" => "assets/product/natural/Headboard/",
                            ],
                            [
                                "name" => "IF-HBD-037",
                                "path" => "assets/product/natural/Headboard/IF-HBD-037.png",
                                "url" => "assets/product/natural/Headboard/",
                            ],
                            [
                                "name" => "IF-HBD-038",
                                "path" => "assets/product/natural/Headboard/IF-HBD-038.png",
                                "url" => "assets/product/natural/Headboard/",
                            ],
                            [
                                "name" => "IF-HBD-039",
                                "path" => "assets/product/natural/Headboard/IF-HBD-039.png",
                                "url" => "assets/product/natural/Headboard/",
                            ],
                            [
                                "name" => "IF-HBD-040",
                                "path" => "assets/product/natural/Headboard/IF-HBD-040.png",
                                "url" => "assets/product/natural/Headboard/",
                            ],
                        ],
                    ],
                    [
                        "name" => "Iron Rattan",
                        "data" => [
                            [
                                "name" => "IF-IRN-001",
                                "path" => "assets/product/natural/Iron Rattan/IF-IRN-001.png",
                                "url" => "assets/product/natural/Iron Rattan/",
                            ],
                            [
                                "name" => "IF-IRN-002",
                                "path" => "assets/product/natural/Iron Rattan/IF-IRN-002.png",
                                "url" => "assets/product/natural/Iron Rattan/",
                            ],
                            [
                                "name" => "IF-IRN-003",
                                "path" => "assets/product/natural/Iron Rattan/IF-IRN-003.png",
                                "url" => "assets/product/natural/Iron Rattan/",
                            ],
                            [
                                "name" => "IF-IRN-004",
                                "path" => "assets/product/natural/Iron Rattan/IF-IRN-004.png",
                                "url" => "assets/product/natural/Iron Rattan/",
                            ],
                            [
                                "name" => "IF-IRN-005",
                                "path" => "assets/product/natural/Iron Rattan/IF-IRN-005.png",
                                "url" => "assets/product/natural/Iron Rattan/",
                            ],
                            [
                                "name" => "IF-IRN-006",
                                "path" => "assets/product/natural/Iron Rattan/IF-IRN-006.png",
                                "url" => "assets/product/natural/Iron Rattan/",
                            ],
                            [
                                "name" => "IF-IRN-007",
                                "path" => "assets/product/natural/Iron Rattan/IF-IRN-007.png",
                                "url" => "assets/product/natural/Iron Rattan/",
                            ],
                            [
                                "name" => "IF-IRN-008",
                                "path" => "assets/product/natural/Iron Rattan/IF-IRN-008.png",
                                "url" => "assets/product/natural/Iron Rattan/",
                            ],
                            [
                                "name" => "IF-IRN-009",
                                "path" => "assets/product/natural/Iron Rattan/IF-IRN-009.png",
                                "url" => "assets/product/natural/Iron Rattan/",
                            ],
                        ],
                    ],
                    [
                        "name" => "Kids",
                        "data" => [
                            [
                                "name" => "IF-KDS-001",
                                "path" => "assets/product/natural/Kids/IF-KDS-001.png",
                                "url" => "assets/product/natural/Kids/",
                            ],
                            [
                                "name" => "IF-KDS-002",
                                "path" => "assets/product/natural/Kids/IF-KDS-002.png",
                                "url" => "assets/product/natural/Kids/",
                            ],
                            [
                                "name" => "IF-KDS-003",
                                "path" => "assets/product/natural/Kids/IF-KDS-003.png",
                                "url" => "assets/product/natural/Kids/",
                            ],
                            [
                                "name" => "IF-KDS-004",
                                "path" => "assets/product/natural/Kids/IF-KDS-004.png",
                                "url" => "assets/product/natural/Kids/",
                            ],
                            [
                                "name" => "IF-KDS-005",
                                "path" => "assets/product/natural/Kids/IF-KDS-005.png",
                                "url" => "assets/product/natural/Kids/",
                            ],
                            [
                                "name" => "IF-KDS-006",
                                "path" => "assets/product/natural/Kids/IF-KDS-006.png",
                                "url" => "assets/product/natural/Kids/",
                            ],
                            [
                                "name" => "IF-KDS-007",
                                "path" => "assets/product/natural/Kids/IF-KDS-007.png",
                                "url" => "assets/product/natural/Kids/",
                            ],
                            [
                                "name" => "IF-KDS-008",
                                "path" => "assets/product/natural/Kids/IF-KDS-008.png",
                                "url" => "assets/product/natural/Kids/",
                            ],
                            [
                                "name" => "IF-KDS-009",
                                "path" => "assets/product/natural/Kids/IF-KDS-009.png",
                                "url" => "assets/product/natural/Kids/",
                            ],
                            [
                                "name" => "IF-KDS-010",
                                "path" => "assets/product/natural/Kids/IF-KDS-010.png",
                                "url" => "assets/product/natural/Kids/",
                            ],
                            [
                                "name" => "IF-KDS-011",
                                "path" => "assets/product/natural/Kids/IF-KDS-011.png",
                                "url" => "assets/product/natural/Kids/",
                            ],
                            [
                                "name" => "IF-KDS-012",
                                "path" => "assets/product/natural/Kids/IF-KDS-012.png",
                                "url" => "assets/product/natural/Kids/",
                            ],
                            [
                                "name" => "IF-KDS-013",
                                "path" => "assets/product/natural/Kids/IF-KDS-013.png",
                                "url" => "assets/product/natural/Kids/",
                            ],
                            [
                                "name" => "IF-KDS-014",
                                "path" => "assets/product/natural/Kids/IF-KDS-014.png",
                                "url" => "assets/product/natural/Kids/",
                            ],
                            [
                                "name" => "IF-KDS-015",
                                "path" => "assets/product/natural/Kids/IF-KDS-015.png",
                                "url" => "assets/product/natural/Kids/",
                            ],
                            [
                                "name" => "IF-KDS-016",
                                "path" => "assets/product/natural/Kids/IF-KDS-016.png",
                                "url" => "assets/product/natural/Kids/",
                            ],
                            [
                                "name" => "IF-KDS-017",
                                "path" => "assets/product/natural/Kids/IF-KDS-017.png",
                                "url" => "assets/product/natural/Kids/",
                            ],
                            [
                                "name" => "IF-KDS-018",
                                "path" => "assets/product/natural/Kids/IF-KDS-018.png",
                                "url" => "assets/product/natural/Kids/",
                            ],
                            [
                                "name" => "IF-KDS-019",
                                "path" => "assets/product/natural/Kids/IF-KDS-019.png",
                                "url" => "assets/product/natural/Kids/",
                            ],
                            [
                                "name" => "IF-KDS-020",
                                "path" => "assets/product/natural/Kids/IF-KDS-020.png",
                                "url" => "assets/product/natural/Kids/",
                            ],
                            [
                                "name" => "IF-KDS-021",
                                "path" => "assets/product/natural/Kids/IF-KDS-021.png",
                                "url" => "assets/product/natural/Kids/",
                            ],
                            [
                                "name" => "IF-KDS-022",
                                "path" => "assets/product/natural/Kids/IF-KDS-022.png",
                                "url" => "assets/product/natural/Kids/",
                            ],
                            [
                                "name" => "IF-KDS-023",
                                "path" => "assets/product/natural/Kids/IF-KDS-023.png",
                                "url" => "assets/product/natural/Kids/",
                            ],
                            [
                                "name" => "IF-KDS-024",
                                "path" => "assets/product/natural/Kids/IF-KDS-024.png",
                                "url" => "assets/product/natural/Kids/",
                            ],
                            [
                                "name" => "IF-KDS-025",
                                "path" => "assets/product/natural/Kids/IF-KDS-025.png",
                                "url" => "assets/product/natural/Kids/",
                            ],
                            [
                                "name" => "IF-KDS-026",
                                "path" => "assets/product/natural/Kids/IF-KDS-026.png",
                                "url" => "assets/product/natural/Kids/",
                            ],
                            [
                                "name" => "IF-KDS-027",
                                "path" => "assets/product/natural/Kids/IF-KDS-027.png",
                                "url" => "assets/product/natural/Kids/",
                            ],
                            [
                                "name" => "IF-KDS-028",
                                "path" => "assets/product/natural/Kids/IF-KDS-028.png",
                                "url" => "assets/product/natural/Kids/",
                            ],
                            [
                                "name" => "IF-KDS-029",
                                "path" => "assets/product/natural/Kids/IF-KDS-029.png",
                                "url" => "assets/product/natural/Kids/",
                            ],
                            [
                                "name" => "IF-KDS-030",
                                "path" => "assets/product/natural/Kids/IF-KDS-030.png",
                                "url" => "assets/product/natural/Kids/",
                            ],
                            [
                                "name" => "IF-KDS-031",
                                "path" => "assets/product/natural/Kids/IF-KDS-031.png",
                                "url" => "assets/product/natural/Kids/",
                            ],
                            [
                                "name" => "IF-KDS-032",
                                "path" => "assets/product/natural/Kids/IF-KDS-032.png",
                                "url" => "assets/product/natural/Kids/",
                            ],
                        ],
                    ],
                    [
                        "name" => "Lamp Shade",
                        "data" => [
                            [
                                "name" => "IF-LMP-001",
                                "path" => "assets/product/natural/Lamp Shade/IF-LMP-001.png",
                                "url" => "assets/product/natural/Lamp Shade/",
                            ],
                            [
                                "name" => "IF-LMP-002",
                                "path" => "assets/product/natural/Lamp Shade/IF-LMP-002.png",
                                "url" => "assets/product/natural/Lamp Shade/",
                            ],
                            [
                                "name" => "IF-LMP-003",
                                "path" => "assets/product/natural/Lamp Shade/IF-LMP-003.png",
                                "url" => "assets/product/natural/Lamp Shade/",
                            ],
                            [
                                "name" => "IF-LMP-004",
                                "path" => "assets/product/natural/Lamp Shade/IF-LMP-004.png",
                                "url" => "assets/product/natural/Lamp Shade/",
                            ],
                            [
                                "name" => "IF-LMP-005",
                                "path" => "assets/product/natural/Lamp Shade/IF-LMP-005.png",
                                "url" => "assets/product/natural/Lamp Shade/",
                            ],
                            [
                                "name" => "IF-LMP-006",
                                "path" => "assets/product/natural/Lamp Shade/IF-LMP-006.png",
                                "url" => "assets/product/natural/Lamp Shade/",
                            ],
                            [
                                "name" => "IF-LMP-007",
                                "path" => "assets/product/natural/Lamp Shade/IF-LMP-007.png",
                                "url" => "assets/product/natural/Lamp Shade/",
                            ],
                            [
                                "name" => "IF-LMP-008",
                                "path" => "assets/product/natural/Lamp Shade/IF-LMP-008.png",
                                "url" => "assets/product/natural/Lamp Shade/",
                            ],
                            [
                                "name" => "IF-LMP-009",
                                "path" => "assets/product/natural/Lamp Shade/IF-LMP-009.png",
                                "url" => "assets/product/natural/Lamp Shade/",
                            ],
                            [
                                "name" => "IF-LMP-010",
                                "path" => "assets/product/natural/Lamp Shade/IF-LMP-010.png",
                                "url" => "assets/product/natural/Lamp Shade/",
                            ],
                            [
                                "name" => "IF-LMP-011",
                                "path" => "assets/product/natural/Lamp Shade/IF-LMP-011.png",
                                "url" => "assets/product/natural/Lamp Shade/",
                            ],
                            [
                                "name" => "IF-LMP-012",
                                "path" => "assets/product/natural/Lamp Shade/IF-LMP-012.png",
                                "url" => "assets/product/natural/Lamp Shade/",
                            ],
                            [
                                "name" => "IF-LMP-013",
                                "path" => "assets/product/natural/Lamp Shade/IF-LMP-013.png",
                                "url" => "assets/product/natural/Lamp Shade/",
                            ],
                            [
                                "name" => "IF-LMP-014",
                                "path" => "assets/product/natural/Lamp Shade/IF-LMP-014.png",
                                "url" => "assets/product/natural/Lamp Shade/",
                            ],
                        ],
                    ],
                    [
                        "name" => "Mirror",
                        "data" => [
                            [
                                "name" => "IF-MIR-001",
                                "path" => "assets/product/natural/Mirror/IF-MIR-001.png",
                                "url" => "assets/product/natural/Mirror/",
                            ],
                            [
                                "name" => "IF-MIR-002",
                                "path" => "assets/product/natural/Mirror/IF-MIR-002.png",
                                "url" => "assets/product/natural/Mirror/",
                            ],
                            [
                                "name" => "IF-MIR-003",
                                "path" => "assets/product/natural/Mirror/IF-MIR-003.png",
                                "url" => "assets/product/natural/Mirror/",
                            ],
                            [
                                "name" => "IF-MIR-004",
                                "path" => "assets/product/natural/Mirror/IF-MIR-004.png",
                                "url" => "assets/product/natural/Mirror/",
                            ],
                            [
                                "name" => "IF-MIR-005",
                                "path" => "assets/product/natural/Mirror/IF-MIR-005.png",
                                "url" => "assets/product/natural/Mirror/",
                            ],
                            [
                                "name" => "IF-MIR-006",
                                "path" => "assets/product/natural/Mirror/IF-MIR-006.png",
                                "url" => "assets/product/natural/Mirror/",
                            ],
                            [
                                "name" => "IF-MIR-007",
                                "path" => "assets/product/natural/Mirror/IF-MIR-007.png",
                                "url" => "assets/product/natural/Mirror/",
                            ],
                            [
                                "name" => "IF-MIR-008",
                                "path" => "assets/product/natural/Mirror/IF-MIR-008.png",
                                "url" => "assets/product/natural/Mirror/",
                            ],
                            [
                                "name" => "IF-MIR-009",
                                "path" => "assets/product/natural/Mirror/IF-MIR-009.png",
                                "url" => "assets/product/natural/Mirror/",
                            ],
                            [
                                "name" => "IF-MIR-010",
                                "path" => "assets/product/natural/Mirror/IF-MIR-010.png",
                                "url" => "assets/product/natural/Mirror/",
                            ],
                            [
                                "name" => "IF-MIR-011",
                                "path" => "assets/product/natural/Mirror/IF-MIR-011.png",
                                "url" => "assets/product/natural/Mirror/",
                            ],
                            [
                                "name" => "IF-MIR-012",
                                "path" => "assets/product/natural/Mirror/IF-MIR-012.png",
                                "url" => "assets/product/natural/Mirror/",
                            ],
                            [
                                "name" => "IF-MIR-013",
                                "path" => "assets/product/natural/Mirror/IF-MIR-013.png",
                                "url" => "assets/product/natural/Mirror/",
                            ],
                            [
                                "name" => "IF-MIR-014",
                                "path" => "assets/product/natural/Mirror/IF-MIR-014.png",
                                "url" => "assets/product/natural/Mirror/",
                            ],
                            [
                                "name" => "IF-MIR-015",
                                "path" => "assets/product/natural/Mirror/IF-MIR-015.png",
                                "url" => "assets/product/natural/Mirror/",
                            ],
                            [
                                "name" => "IF-MIR-016",
                                "path" => "assets/product/natural/Mirror/IF-MIR-016.png",
                                "url" => "assets/product/natural/Mirror/",
                            ],
                            [
                                "name" => "IF-MIR-017",
                                "path" => "assets/product/natural/Mirror/IF-MIR-017.png",
                                "url" => "assets/product/natural/Mirror/",
                            ],
                            [
                                "name" => "IF-MIR-018",
                                "path" => "assets/product/natural/Mirror/IF-MIR-018.png",
                                "url" => "assets/product/natural/Mirror/",
                            ],
                            [
                                "name" => "IF-MIR-019",
                                "path" => "assets/product/natural/Mirror/IF-MIR-019.png",
                                "url" => "assets/product/natural/Mirror/",
                            ],
                            [
                                "name" => "IF-MIR-020",
                                "path" => "assets/product/natural/Mirror/IF-MIR-020.png",
                                "url" => "assets/product/natural/Mirror/",
                            ],
                            [
                                "name" => "IF-MIR-021",
                                "path" => "assets/product/natural/Mirror/IF-MIR-021.png",
                                "url" => "assets/product/natural/Mirror/",
                            ],
                            [
                                "name" => "IF-MIR-022",
                                "path" => "assets/product/natural/Mirror/IF-MIR-022.png",
                                "url" => "assets/product/natural/Mirror/",
                            ],
                            [
                                "name" => "IF-MIR-023",
                                "path" => "assets/product/natural/Mirror/IF-MIR-023.png",
                                "url" => "assets/product/natural/Mirror/",
                            ],
                            [
                                "name" => "IF-MIR-024",
                                "path" => "assets/product/natural/Mirror/IF-MIR-024.png",
                                "url" => "assets/product/natural/Mirror/",
                            ],
                            [
                                "name" => "IF-MIR-025",
                                "path" => "assets/product/natural/Mirror/IF-MIR-025.png",
                                "url" => "assets/product/natural/Mirror/",
                            ],
                            [
                                "name" => "IF-MIR-026",
                                "path" => "assets/product/natural/Mirror/IF-MIR-026.png",
                                "url" => "assets/product/natural/Mirror/",
                            ],
                            [
                                "name" => "IF-MIR-027",
                                "path" => "assets/product/natural/Mirror/IF-MIR-027.png",
                                "url" => "assets/product/natural/Mirror/",
                            ],
                            [
                                "name" => "IF-MIR-028",
                                "path" => "assets/product/natural/Mirror/IF-MIR-028.png",
                                "url" => "assets/product/natural/Mirror/",
                            ],
                            [
                                "name" => "IF-MIR-029",
                                "path" => "assets/product/natural/Mirror/IF-MIR-029.png",
                                "url" => "assets/product/natural/Mirror/",
                            ],
                        ],
                    ],
                    [
                        "name" => "Other",
                        "data" => [
                            [
                                "name" => "IF-OTH-001",
                                "path" => "assets/product/natural/Other/IF-OTH-001.png",
                                "url" => "assets/product/natural/Other/",
                            ],
                            [
                                "name" => "IF-OTH-002",
                                "path" => "assets/product/natural/Other/IF-OTH-002.png",
                                "url" => "assets/product/natural/Other/",
                            ],
                            [
                                "name" => "IF-OTH-003",
                                "path" => "assets/product/natural/Other/IF-OTH-003.png",
                                "url" => "assets/product/natural/Other/",
                            ],
                            [
                                "name" => "IF-OTH-004",
                                "path" => "assets/product/natural/Other/IF-OTH-004.png",
                                "url" => "assets/product/natural/Other/",
                            ],
                            [
                                "name" => "IF-OTH-005",
                                "path" => "assets/product/natural/Other/IF-OTH-005.png",
                                "url" => "assets/product/natural/Other/",
                            ],
                            [
                                "name" => "IF-OTH-006",
                                "path" => "assets/product/natural/Other/IF-OTH-006.png",
                                "url" => "assets/product/natural/Other/",
                            ],
                            [
                                "name" => "IF-OTH-007",
                                "path" => "assets/product/natural/Other/IF-OTH-007.png",
                                "url" => "assets/product/natural/Other/",
                            ],
                            [
                                "name" => "IF-OTH-008",
                                "path" => "assets/product/natural/Other/IF-OTH-008.png",
                                "url" => "assets/product/natural/Other/",
                            ],
                            [
                                "name" => "IF-OTH-009",
                                "path" => "assets/product/natural/Other/IF-OTH-009.png",
                                "url" => "assets/product/natural/Other/",
                            ],
                            [
                                "name" => "IF-OTH-010",
                                "path" => "assets/product/natural/Other/IF-OTH-010.png",
                                "url" => "assets/product/natural/Other/",
                            ],
                            [
                                "name" => "IF-OTH-011",
                                "path" => "assets/product/natural/Other/IF-OTH-011.png",
                                "url" => "assets/product/natural/Other/",
                            ],
                        ],
                    ],
                    [
                        "name" => "Peacock Chair",
                        "data" => [
                            [
                                "name" => "IF-PCK-001",
                                "path" => "assets/product/natural/Peacock Chair/IF-PCK-001.png",
                                "url" => "assets/product/natural/Peacock Chair/",
                            ],
                            [
                                "name" => "IF-PCK-002",
                                "path" => "assets/product/natural/Peacock Chair/IF-PCK-002.png",
                                "url" => "assets/product/natural/Peacock Chair/",
                            ],
                            [
                                "name" => "IF-PCK-003",
                                "path" => "assets/product/natural/Peacock Chair/IF-PCK-003.png",
                                "url" => "assets/product/natural/Peacock Chair/",
                            ],
                            [
                                "name" => "IF-PCK-004",
                                "path" => "assets/product/natural/Peacock Chair/IF-PCK-004.png",
                                "url" => "assets/product/natural/Peacock Chair/",
                            ],
                            [
                                "name" => "IF-PCK-005",
                                "path" => "assets/product/natural/Peacock Chair/IF-PCK-005.png",
                                "url" => "assets/product/natural/Peacock Chair/",
                            ],
                            [
                                "name" => "IF-PCK-006",
                                "path" => "assets/product/natural/Peacock Chair/IF-PCK-006.png",
                                "url" => "assets/product/natural/Peacock Chair/",
                            ],
                            [
                                "name" => "IF-PCK-007",
                                "path" => "assets/product/natural/Peacock Chair/IF-PCK-007.png",
                                "url" => "assets/product/natural/Peacock Chair/",
                            ],
                            [
                                "name" => "IF-PCK-008",
                                "path" => "assets/product/natural/Peacock Chair/IF-PCK-008.png",
                                "url" => "assets/product/natural/Peacock Chair/",
                            ],
                            [
                                "name" => "IF-PCK-009",
                                "path" => "assets/product/natural/Peacock Chair/IF-PCK-009.png",
                                "url" => "assets/product/natural/Peacock Chair/",
                            ],
                            [
                                "name" => "IF-PCK-010",
                                "path" => "assets/product/natural/Peacock Chair/IF-PCK-010.png",
                                "url" => "assets/product/natural/Peacock Chair/",
                            ],
                            [
                                "name" => "IF-PCK-011",
                                "path" => "assets/product/natural/Peacock Chair/IF-PCK-011.png",
                                "url" => "assets/product/natural/Peacock Chair/",
                            ],
                            [
                                "name" => "IF-PCK-012",
                                "path" => "assets/product/natural/Peacock Chair/IF-PCK-012.png",
                                "url" => "assets/product/natural/Peacock Chair/",
                            ],
                            [
                                "name" => "IF-PCK-013",
                                "path" => "assets/product/natural/Peacock Chair/IF-PCK-013.png",
                                "url" => "assets/product/natural/Peacock Chair/",
                            ],
                            [
                                "name" => "IF-PCK-014",
                                "path" => "assets/product/natural/Peacock Chair/IF-PCK-014.png",
                                "url" => "assets/product/natural/Peacock Chair/",
                            ],
                            [
                                "name" => "IF-PCK-015",
                                "path" => "assets/product/natural/Peacock Chair/IF-PCK-015.png",
                                "url" => "assets/product/natural/Peacock Chair/",
                            ],
                            [
                                "name" => "IF-PCK-016",
                                "path" => "assets/product/natural/Peacock Chair/IF-PCK-016.png",
                                "url" => "assets/product/natural/Peacock Chair/",
                            ],
                            [
                                "name" => "IF-PCK-017",
                                "path" => "assets/product/natural/Peacock Chair/IF-PCK-017.png",
                                "url" => "assets/product/natural/Peacock Chair/",
                            ],
                            [
                                "name" => "IF-PCK-018",
                                "path" => "assets/product/natural/Peacock Chair/IF-PCK-018.png",
                                "url" => "assets/product/natural/Peacock Chair/",
                            ],
                            [
                                "name" => "IF-PCK-019",
                                "path" => "assets/product/natural/Peacock Chair/IF-PCK-019.png",
                                "url" => "assets/product/natural/Peacock Chair/",
                            ],
                            [
                                "name" => "IF-PCK-020",
                                "path" => "assets/product/natural/Peacock Chair/IF-PCK-020.png",
                                "url" => "assets/product/natural/Peacock Chair/",
                            ],
                            [
                                "name" => "IF-PCK-021",
                                "path" => "assets/product/natural/Peacock Chair/IF-PCK-021.png",
                                "url" => "assets/product/natural/Peacock Chair/",
                            ],
                            [
                                "name" => "IF-PCK-022",
                                "path" => "assets/product/natural/Peacock Chair/IF-PCK-022.png",
                                "url" => "assets/product/natural/Peacock Chair/",
                            ],
                            [
                                "name" => "IF-PCK-023",
                                "path" => "assets/product/natural/Peacock Chair/IF-PCK-023.png",
                                "url" => "assets/product/natural/Peacock Chair/",
                            ],
                            [
                                "name" => "IF-PCK-024",
                                "path" => "assets/product/natural/Peacock Chair/IF-PCK-024.png",
                                "url" => "assets/product/natural/Peacock Chair/",
                            ],
                            [
                                "name" => "IF-PCK-025",
                                "path" => "assets/product/natural/Peacock Chair/IF-PCK-025.png",
                                "url" => "assets/product/natural/Peacock Chair/",
                            ],
                            [
                                "name" => "IF-PCK-026",
                                "path" => "assets/product/natural/Peacock Chair/IF-PCK-026.png",
                                "url" => "assets/product/natural/Peacock Chair/",
                            ],
                            [
                                "name" => "IF-PCK-027",
                                "path" => "assets/product/natural/Peacock Chair/IF-PCK-027.png",
                                "url" => "assets/product/natural/Peacock Chair/",
                            ],
                            [
                                "name" => "IF-PCK-028",
                                "path" => "assets/product/natural/Peacock Chair/IF-PCK-028.png",
                                "url" => "assets/product/natural/Peacock Chair/",
                            ],
                            [
                                "name" => "IF-PCK-029",
                                "path" => "assets/product/natural/Peacock Chair/IF-PCK-029.png",
                                "url" => "assets/product/natural/Peacock Chair/",
                            ],
                            [
                                "name" => "IF-PCK-030",
                                "path" => "assets/product/natural/Peacock Chair/IF-PCK-030.png",
                                "url" => "assets/product/natural/Peacock Chair/",
                            ],
                            [
                                "name" => "IF-PCK-031",
                                "path" => "assets/product/natural/Peacock Chair/IF-PCK-031.png",
                                "url" => "assets/product/natural/Peacock Chair/",
                            ],
                            [
                                "name" => "IF-PCK-032",
                                "path" => "assets/product/natural/Peacock Chair/IF-PCK-032.png",
                                "url" => "assets/product/natural/Peacock Chair/",
                            ],
                            [
                                "name" => "IF-PCK-033",
                                "path" => "assets/product/natural/Peacock Chair/IF-PCK-033.png",
                                "url" => "assets/product/natural/Peacock Chair/",
                            ],
                            [
                                "name" => "IF-PCK-034",
                                "path" => "assets/product/natural/Peacock Chair/IF-PCK-034.png",
                                "url" => "assets/product/natural/Peacock Chair/",
                            ],
                            [
                                "name" => "IF-PCK-035",
                                "path" => "assets/product/natural/Peacock Chair/IF-PCK-035.png",
                                "url" => "assets/product/natural/Peacock Chair/",
                            ],
                            [
                                "name" => "IF-PCK-036",
                                "path" => "assets/product/natural/Peacock Chair/IF-PCK-036.png",
                                "url" => "assets/product/natural/Peacock Chair/",
                            ],
                            [
                                "name" => "IF-PCK-037",
                                "path" => "assets/product/natural/Peacock Chair/IF-PCK-037.png",
                                "url" => "assets/product/natural/Peacock Chair/",
                            ],
                            [
                                "name" => "IF-PCK-038",
                                "path" => "assets/product/natural/Peacock Chair/IF-PCK-038.png",
                                "url" => "assets/product/natural/Peacock Chair/",
                            ],
                        ],
                    ],
                    [
                        "name" => "Planter",
                        "data" => [
                            [
                                "name" => "IF-PLT-001",
                                "path" => "assets/product/natural/Planter/IF-PLT-001.png",
                                "url" => "assets/product/natural/Planter/",
                            ],
                            [
                                "name" => "IF-PLT-002",
                                "path" => "assets/product/natural/Planter/IF-PLT-002.png",
                                "url" => "assets/product/natural/Planter/",
                            ],
                            [
                                "name" => "IF-PLT-003",
                                "path" => "assets/product/natural/Planter/IF-PLT-003.png",
                                "url" => "assets/product/natural/Planter/",
                            ],
                            [
                                "name" => "IF-PLT-004",
                                "path" => "assets/product/natural/Planter/IF-PLT-004.png",
                                "url" => "assets/product/natural/Planter/",
                            ],
                            [
                                "name" => "IF-PLT-005",
                                "path" => "assets/product/natural/Planter/IF-PLT-005.png",
                                "url" => "assets/product/natural/Planter/",
                            ],
                            [
                                "name" => "IF-PLT-006",
                                "path" => "assets/product/natural/Planter/IF-PLT-006.png",
                                "url" => "assets/product/natural/Planter/",
                            ],
                            [
                                "name" => "IF-PLT-007",
                                "path" => "assets/product/natural/Planter/IF-PLT-007.png",
                                "url" => "assets/product/natural/Planter/",
                            ],
                            [
                                "name" => "IF-PLT-008",
                                "path" => "assets/product/natural/Planter/IF-PLT-008.png",
                                "url" => "assets/product/natural/Planter/",
                            ],
                            [
                                "name" => "IF-PLT-009",
                                "path" => "assets/product/natural/Planter/IF-PLT-009.png",
                                "url" => "assets/product/natural/Planter/",
                            ],
                            [
                                "name" => "IF-PLT-010",
                                "path" => "assets/product/natural/Planter/IF-PLT-010.png",
                                "url" => "assets/product/natural/Planter/",
                            ],
                            [
                                "name" => "IF-PLT-011",
                                "path" => "assets/product/natural/Planter/IF-PLT-011.png",
                                "url" => "assets/product/natural/Planter/",
                            ],
                            [
                                "name" => "IF-PLT-012",
                                "path" => "assets/product/natural/Planter/IF-PLT-012.png",
                                "url" => "assets/product/natural/Planter/",
                            ],
                            [
                                "name" => "IF-PLT-013",
                                "path" => "assets/product/natural/Planter/IF-PLT-013.png",
                                "url" => "assets/product/natural/Planter/",
                            ],
                            [
                                "name" => "IF-PLT-014",
                                "path" => "assets/product/natural/Planter/IF-PLT-014.png",
                                "url" => "assets/product/natural/Planter/",
                            ],
                            [
                                "name" => "IF-PLT-015",
                                "path" => "assets/product/natural/Planter/IF-PLT-015.png",
                                "url" => "assets/product/natural/Planter/",
                            ],
                            [
                                "name" => "IF-PLT-016",
                                "path" => "assets/product/natural/Planter/IF-PLT-016.png",
                                "url" => "assets/product/natural/Planter/",
                            ],
                            [
                                "name" => "IF-PLT-017",
                                "path" => "assets/product/natural/Planter/IF-PLT-017.png",
                                "url" => "assets/product/natural/Planter/",
                            ],
                            [
                                "name" => "IF-PLT-018",
                                "path" => "assets/product/natural/Planter/IF-PLT-018.png",
                                "url" => "assets/product/natural/Planter/",
                            ],
                            [
                                "name" => "IF-PLT-019",
                                "path" => "assets/product/natural/Planter/IF-PLT-019.png",
                                "url" => "assets/product/natural/Planter/",
                            ],
                            [
                                "name" => "IF-PLT-020",
                                "path" => "assets/product/natural/Planter/IF-PLT-020.png",
                                "url" => "assets/product/natural/Planter/",
                            ],
                            [
                                "name" => "IF-PLT-021",
                                "path" => "assets/product/natural/Planter/IF-PLT-021.png",
                                "url" => "assets/product/natural/Planter/",
                            ],
                            [
                                "name" => "IF-PLT-022",
                                "path" => "assets/product/natural/Planter/IF-PLT-022.png",
                                "url" => "assets/product/natural/Planter/",
                            ],
                        ],
                    ],
                    [
                        "name" => "Sofa",
                        "data" => [
                            [
                                "name" => "IF-SFA-001",
                                "path" => "assets/product/natural/Sofa/IF-SFA-001.png",
                                "url" => "assets/product/natural/Sofa/",
                            ],
                            [
                                "name" => "IF-SFA-002",
                                "path" => "assets/product/natural/Sofa/IF-SFA-002.png",
                                "url" => "assets/product/natural/Sofa/",
                            ],
                            [
                                "name" => "IF-SFA-003",
                                "path" => "assets/product/natural/Sofa/IF-SFA-003.png",
                                "url" => "assets/product/natural/Sofa/",
                            ],
                            [
                                "name" => "IF-SFA-004",
                                "path" => "assets/product/natural/Sofa/IF-SFA-004.png",
                                "url" => "assets/product/natural/Sofa/",
                            ],
                            [
                                "name" => "IF-SFA-005",
                                "path" => "assets/product/natural/Sofa/IF-SFA-005.png",
                                "url" => "assets/product/natural/Sofa/",
                            ],
                            [
                                "name" => "IF-SFA-006",
                                "path" => "assets/product/natural/Sofa/IF-SFA-006.png",
                                "url" => "assets/product/natural/Sofa/",
                            ],
                            [
                                "name" => "IF-SFA-007",
                                "path" => "assets/product/natural/Sofa/IF-SFA-007.png",
                                "url" => "assets/product/natural/Sofa/",
                            ],
                            [
                                "name" => "IF-SFA-008",
                                "path" => "assets/product/natural/Sofa/IF-SFA-008.png",
                                "url" => "assets/product/natural/Sofa/",
                            ],
                            [
                                "name" => "IF-SFA-009",
                                "path" => "assets/product/natural/Sofa/IF-SFA-009.png",
                                "url" => "assets/product/natural/Sofa/",
                            ],
                            [
                                "name" => "IF-SFA-010",
                                "path" => "assets/product/natural/Sofa/IF-SFA-010.png",
                                "url" => "assets/product/natural/Sofa/",
                            ],
                            [
                                "name" => "IF-SFA-011",
                                "path" => "assets/product/natural/Sofa/IF-SFA-011.png",
                                "url" => "assets/product/natural/Sofa/",
                            ],
                        ],
                    ],
                    [
                        "name" => "Stool",
                        "data" => [
                            [
                                "name" => "IF-STL-001",
                                "path" => "assets/product/natural/Stool/IF-STL-001.png",
                                "url" => "assets/product/natural/Stool/",
                            ],
                            [
                                "name" => "IF-STL-002",
                                "path" => "assets/product/natural/Stool/IF-STL-002.png",
                                "url" => "assets/product/natural/Stool/",
                            ],
                            [
                                "name" => "IF-STL-003",
                                "path" => "assets/product/natural/Stool/IF-STL-003.png",
                                "url" => "assets/product/natural/Stool/",
                            ],
                            [
                                "name" => "IF-STL-004",
                                "path" => "assets/product/natural/Stool/IF-STL-004.png",
                                "url" => "assets/product/natural/Stool/",
                            ],
                            [
                                "name" => "IF-STL-005",
                                "path" => "assets/product/natural/Stool/IF-STL-005.png",
                                "url" => "assets/product/natural/Stool/",
                            ],
                            [
                                "name" => "IF-STL-006",
                                "path" => "assets/product/natural/Stool/IF-STL-006.png",
                                "url" => "assets/product/natural/Stool/",
                            ],
                            [
                                "name" => "IF-STL-007",
                                "path" => "assets/product/natural/Stool/IF-STL-007.png",
                                "url" => "assets/product/natural/Stool/",
                            ],
                            [
                                "name" => "IF-STL-008",
                                "path" => "assets/product/natural/Stool/IF-STL-008.png",
                                "url" => "assets/product/natural/Stool/",
                            ],
                            [
                                "name" => "IF-STL-009",
                                "path" => "assets/product/natural/Stool/IF-STL-009.png",
                                "url" => "assets/product/natural/Stool/",
                            ],
                            [
                                "name" => "IF-STL-010",
                                "path" => "assets/product/natural/Stool/IF-STL-010.png",
                                "url" => "assets/product/natural/Stool/",
                            ],
                            [
                                "name" => "IF-STL-011",
                                "path" => "assets/product/natural/Stool/IF-STL-011.png",
                                "url" => "assets/product/natural/Stool/",
                            ],
                            [
                                "name" => "IF-STL-012",
                                "path" => "assets/product/natural/Stool/IF-STL-012.png",
                                "url" => "assets/product/natural/Stool/",
                            ],
                            [
                                "name" => "IF-STL-013",
                                "path" => "assets/product/natural/Stool/IF-STL-013.png",
                                "url" => "assets/product/natural/Stool/",
                            ],
                            [
                                "name" => "IF-STL-014",
                                "path" => "assets/product/natural/Stool/IF-STL-014.png",
                                "url" => "assets/product/natural/Stool/",
                            ],
                            [
                                "name" => "IF-STL-015",
                                "path" => "assets/product/natural/Stool/IF-STL-015.png",
                                "url" => "assets/product/natural/Stool/",
                            ],
                            [
                                "name" => "IF-STL-016",
                                "path" => "assets/product/natural/Stool/IF-STL-016.png",
                                "url" => "assets/product/natural/Stool/",
                            ],
                            [
                                "name" => "IF-STL-017",
                                "path" => "assets/product/natural/Stool/IF-STL-017.png",
                                "url" => "assets/product/natural/Stool/",
                            ],
                        ],
                    ],
                    [
                        "name" => "Table",
                        "data" => [
                            [
                                "name" => "IF-TBL-001",
                                "path" => "assets/product/natural/Table/IF-TBL-001.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-002",
                                "path" => "assets/product/natural/Table/IF-TBL-002.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-003",
                                "path" => "assets/product/natural/Table/IF-TBL-003.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-004",
                                "path" => "assets/product/natural/Table/IF-TBL-004.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-005",
                                "path" => "assets/product/natural/Table/IF-TBL-005.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-006",
                                "path" => "assets/product/natural/Table/IF-TBL-006.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-007",
                                "path" => "assets/product/natural/Table/IF-TBL-007.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-008",
                                "path" => "assets/product/natural/Table/IF-TBL-008.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-009",
                                "path" => "assets/product/natural/Table/IF-TBL-009.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-010",
                                "path" => "assets/product/natural/Table/IF-TBL-010.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-011",
                                "path" => "assets/product/natural/Table/IF-TBL-011.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-012",
                                "path" => "assets/product/natural/Table/IF-TBL-012.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-013",
                                "path" => "assets/product/natural/Table/IF-TBL-013.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-014",
                                "path" => "assets/product/natural/Table/IF-TBL-014.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-015",
                                "path" => "assets/product/natural/Table/IF-TBL-015.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-016",
                                "path" => "assets/product/natural/Table/IF-TBL-016.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-017",
                                "path" => "assets/product/natural/Table/IF-TBL-017.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-018",
                                "path" => "assets/product/natural/Table/IF-TBL-018.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-019",
                                "path" => "assets/product/natural/Table/IF-TBL-019.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-020",
                                "path" => "assets/product/natural/Table/IF-TBL-020.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-021",
                                "path" => "assets/product/natural/Table/IF-TBL-021.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-022",
                                "path" => "assets/product/natural/Table/IF-TBL-022.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-023",
                                "path" => "assets/product/natural/Table/IF-TBL-023.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-024",
                                "path" => "assets/product/natural/Table/IF-TBL-024.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-025",
                                "path" => "assets/product/natural/Table/IF-TBL-025.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-026",
                                "path" => "assets/product/natural/Table/IF-TBL-026.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-027",
                                "path" => "assets/product/natural/Table/IF-TBL-027.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-028",
                                "path" => "assets/product/natural/Table/IF-TBL-028.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-029",
                                "path" => "assets/product/natural/Table/IF-TBL-029.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-030",
                                "path" => "assets/product/natural/Table/IF-TBL-030.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-031",
                                "path" => "assets/product/natural/Table/IF-TBL-031.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-032",
                                "path" => "assets/product/natural/Table/IF-TBL-032.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-033",
                                "path" => "assets/product/natural/Table/IF-TBL-033.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-034",
                                "path" => "assets/product/natural/Table/IF-TBL-034.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-035",
                                "path" => "assets/product/natural/Table/IF-TBL-035.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-036",
                                "path" => "assets/product/natural/Table/IF-TBL-036.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-037",
                                "path" => "assets/product/natural/Table/IF-TBL-037.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-038",
                                "path" => "assets/product/natural/Table/IF-TBL-038.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-039",
                                "path" => "assets/product/natural/Table/IF-TBL-039.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-040",
                                "path" => "assets/product/natural/Table/IF-TBL-040.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-041",
                                "path" => "assets/product/natural/Table/IF-TBL-041.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-042",
                                "path" => "assets/product/natural/Table/IF-TBL-042.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-043",
                                "path" => "assets/product/natural/Table/IF-TBL-043.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-044",
                                "path" => "assets/product/natural/Table/IF-TBL-044.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-045",
                                "path" => "assets/product/natural/Table/IF-TBL-045.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-046",
                                "path" => "assets/product/natural/Table/IF-TBL-046.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-047",
                                "path" => "assets/product/natural/Table/IF-TBL-047.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-048",
                                "path" => "assets/product/natural/Table/IF-TBL-048.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-049",
                                "path" => "assets/product/natural/Table/IF-TBL-049.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-050",
                                "path" => "assets/product/natural/Table/IF-TBL-050.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-051",
                                "path" => "assets/product/natural/Table/IF-TBL-051.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-052",
                                "path" => "assets/product/natural/Table/IF-TBL-052.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-053",
                                "path" => "assets/product/natural/Table/IF-TBL-053.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-054",
                                "path" => "assets/product/natural/Table/IF-TBL-054.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-055",
                                "path" => "assets/product/natural/Table/IF-TBL-055.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-056",
                                "path" => "assets/product/natural/Table/IF-TBL-056.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-057",
                                "path" => "assets/product/natural/Table/IF-TBL-057.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-058",
                                "path" => "assets/product/natural/Table/IF-TBL-058.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-059",
                                "path" => "assets/product/natural/Table/IF-TBL-059.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                            [
                                "name" => "IF-TBL-060",
                                "path" => "assets/product/natural/Table/IF-TBL-060.png",
                                "url" => "assets/product/natural/Table/",
                            ],
                        ],
                    ],
                    [
                        "name" => "Wall Shelf",
                        "data" => [
                            [
                                "name" => "IF-WAL-001",
                                "path" => "assets/product/natural/Wall Shelf/IF-WAL-001.png",
                                "url" => "assets/product/natural/Wall Shelf/",
                            ],
                            [
                                "name" => "IF-WAL-002",
                                "path" => "assets/product/natural/Wall Shelf/IF-WAL-002.png",
                                "url" => "assets/product/natural/Wall Shelf/",
                            ],
                            [
                                "name" => "IF-WAL-003",
                                "path" => "assets/product/natural/Wall Shelf/IF-WAL-003.png",
                                "url" => "assets/product/natural/Wall Shelf/",
                            ],
                            [
                                "name" => "IF-WAL-004",
                                "path" => "assets/product/natural/Wall Shelf/IF-WAL-004.png",
                                "url" => "assets/product/natural/Wall Shelf/",
                            ],
                            [
                                "name" => "IF-WAL-005",
                                "path" => "assets/product/natural/Wall Shelf/IF-WAL-005.png",
                                "url" => "assets/product/natural/Wall Shelf/",
                            ],
                            [
                                "name" => "IF-WAL-006",
                                "path" => "assets/product/natural/Wall Shelf/IF-WAL-006.png",
                                "url" => "assets/product/natural/Wall Shelf/",
                            ],
                            [
                                "name" => "IF-WAL-007",
                                "path" => "assets/product/natural/Wall Shelf/IF-WAL-007.png",
                                "url" => "assets/product/natural/Wall Shelf/",
                            ],
                            [
                                "name" => "IF-WAL-008",
                                "path" => "assets/product/natural/Wall Shelf/IF-WAL-008.png",
                                "url" => "assets/product/natural/Wall Shelf/",
                            ],
                            [
                                "name" => "IF-WAL-009",
                                "path" => "assets/product/natural/Wall Shelf/IF-WAL-009.png",
                                "url" => "assets/product/natural/Wall Shelf/",
                            ],
                            [
                                "name" => "IF-WAL-010",
                                "path" => "assets/product/natural/Wall Shelf/IF-WAL-010.png",
                                "url" => "assets/product/natural/Wall Shelf/",
                            ],
                            [
                                "name" => "IF-WAL-011",
                                "path" => "assets/product/natural/Wall Shelf/IF-WAL-011.png",
                                "url" => "assets/product/natural/Wall Shelf/",
                            ],
                            [
                                "name" => "IF-WAL-012",
                                "path" => "assets/product/natural/Wall Shelf/IF-WAL-012.png",
                                "url" => "assets/product/natural/Wall Shelf/",
                            ],
                            [
                                "name" => "IF-WAL-013",
                                "path" => "assets/product/natural/Wall Shelf/IF-WAL-013.png",
                                "url" => "assets/product/natural/Wall Shelf/",
                            ],
                            [
                                "name" => "IF-WAL-014",
                                "path" => "assets/product/natural/Wall Shelf/IF-WAL-014.png",
                                "url" => "assets/product/natural/Wall Shelf/",
                            ],
                            [
                                "name" => "IF-WAL-015",
                                "path" => "assets/product/natural/Wall Shelf/IF-WAL-015.png",
                                "url" => "assets/product/natural/Wall Shelf/",
                            ],
                            [
                                "name" => "IF-WAL-016",
                                "path" => "assets/product/natural/Wall Shelf/IF-WAL-016.png",
                                "url" => "assets/product/natural/Wall Shelf/",
                            ],
                            [
                                "name" => "IF-WAL-017",
                                "path" => "assets/product/natural/Wall Shelf/IF-WAL-017.png",
                                "url" => "assets/product/natural/Wall Shelf/",
                            ],
                            [
                                "name" => "IF-WAL-018",
                                "path" => "assets/product/natural/Wall Shelf/IF-WAL-018.png",
                                "url" => "assets/product/natural/Wall Shelf/",
                            ],
                            [
                                "name" => "IF-WAL-019",
                                "path" => "assets/product/natural/Wall Shelf/IF-WAL-019.png",
                                "url" => "assets/product/natural/Wall Shelf/",
                            ],
                            [
                                "name" => "IF-WAL-020",
                                "path" => "assets/product/natural/Wall Shelf/IF-WAL-020.png",
                                "url" => "assets/product/natural/Wall Shelf/",
                            ],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($data as $value) {
            foreach ($value['category'] as $result) {
                $category = Category::create([
                    "name" => $result['name'],
                    "type" => $value['name'],
                ]);
                foreach ($result['data'] as $record) {
                    Product::create([
                        'category_id' => $category->id,
                        'name' => $record['name'],
                        'url' => $record['url'],
                        'path' => $record['path'],
                    ]);
                }
            }
        }
    }
}
