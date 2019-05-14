<?php

define( "VALUE",
    [
        "TP_PK" => NULL,
        "TP_DATETIME" => date('Y-m-d H:i:s'),
        "TP_DATE" => date('Y-m-d'),
        "TP_TIME" => date('H:i:s'),
        "TP_RELACION" => 0,
        "TP_INTEGER" => 0,
        "TP_OPTION" => 0,
        "TP_STRING" => "",
        "TP_TEXT" => "",
        "TP_IMG" => "",
        "TP_FLOAT" => 0.0,
        "TP_DOUBLE" => 0.0,
        "TP_BOLEANO" => true
    ]
);

define( "ENTIDADES", [
    "empresa" => [
        "ATRIBUTOS" => [
            "id" => [
                "TIPO" => "TP_PK",
                "VISIBILIDAD" => "TP_INVISIBLE",
                "NECESARIO" => 0,
                "DEFAULT" => "nulo"
            ],
            "autofecha" => [
                "TIPO" => "TP_DATETIME",
                "VISIBILIDAD" => "TP_FECHA",
                "NECESARIO" => 0
            ],
            "ubicacion" => [
                "TIPO" => "TP_JSON",
                "VISIBILIDAD" => "TP_VISIBLE",
                "NOMBRE" => "ubicación",
                "DEFAULT" => null,
            ],
            "telefono" => [
                "TIPO" => "TP_JSON",
                "VISIBILIDAD" => "TP_VISIBLE",
                "NOMBRE" => "teléfono",
                "DEFAULT" => null
            ],
            "email" => [
                "TIPO" => "TP_JSON",
                "VISIBILIDAD" => "TP_VISIBLE",
                "DEFAULT" => NULL
            ],
            "metadatos" => [
                "TIPO" => "TP_JSON",
                "VISIBILIDAD" => "TP_VISIBLE",
                "DEFAULT" => NULL
            ],
            "redes" => [
                "TIPO" => "TP_JSON",
                "VISIBILIDAD" => "TP_VISIBLE",
                "DEFAULT" => NULL
            ],
            "elim" => [
                "TIPO" => "TP_BOLEANO",
                "VISIBILIDAD" => "TP_BANDERA",
                "NECESARIO" => 0,
                "DEFAULT" => 0
            ]
        ]
    ],
    "slider" => [
        "ATRIBUTOS" => [
            "id" => [
                "TIPO" => "TP_PK",
                "VISIBILIDAD" => "TP_INVISIBLE",
                "NECESARIO" => 0,
                "DEFAULT" => "nulo"
            ],
            "autofecha" => [
                "TIPO" => "TP_DATETIME",
                "VISIBILIDAD" => "TP_FECHA",
                "NECESARIO" => 0
            ],
            "seccion" => [
                "TIPO" => "TP_STRING",
                "VISIBILIDAD" => "TP_VISIBLE",
                "SIZE" => 20,//LONGITUD DEL STRING
                "DEFAULT" => NULL
            ],
            "texto" => [
                "TIPO" => "TP_TEXT",
                "VISIBILIDAD" => "TP_VISIBLE",
                "DEFAULT" => NULL
            ],
            "image" => [
                "TIPO" => "TP_IMAGE",
                "VISIBILIDAD" => "TP_VISIBLE",
                "DEFAULT" => NULL
            ],
            "elim" => [
                "TIPO" => "TP_BOLEANO",
                "VISIBILIDAD" => "TP_BANDERA",
                "NECESARIO" => 0,
                "DEFAULT" => 0
            ]
        ],
        "VISIBLE" => [
            "TEXTO" => "/image/ (/seccion/)",
            "ATTR" => ["image","seccion"]
        ]
    ],
    "local" => [
        "ATRIBUTOS" => [
            "id" => [
                "TIPO" => "TP_PK",
                "VISIBILIDAD" => "TP_INVISIBLE",
                "NECESARIO" => 0,
                "DEFAULT" => "nulo"
            ],
            "autofecha" => [
                "TIPO" => "TP_DATETIME",
                "VISIBILIDAD" => "TP_FECHA",
                "NECESARIO" => 0
            ],
            "nombre" => [
                "TIPO" => "TP_STRING",
                "VISIBILIDAD" => "TP_VISIBLE",
                "SIZE" => 100,//LONGITUD DEL STRING
                "DEFAULT" => NULL
            ],
            "informacion" => [
                "TIPO" => "TP_JSON",
                "VISIBILIDAD" => "TP_VISIBLE",
                "DEFAULT" => NULL
            ],
            "elim" => [
                "TIPO" => "TP_BOLEANO",
                "VISIBILIDAD" => "TP_BANDERA",
                "NECESARIO" => 0,
                "DEFAULT" => 0
            ]
        ],
        "VISIBLE" => [
            "TEXTO" => "/nombre/ (/informacion/)",
            "ATTR" => ["nombre","informacion"]
        ]
    ],
    "familia" => [//unidad de nogocio
        "ATRIBUTOS" => [
            "id" => [
                "TIPO" => "TP_PK",
                "VISIBILIDAD" => "TP_INVISIBLE",
                "NECESARIO" => 0,
                "DEFAULT" => "nulo"
            ],
            "autofecha" => [
                "TIPO" => "TP_DATETIME",
                "VISIBILIDAD" => "TP_FECHA",
                "NECESARIO" => 0
            ],
            "nombre" => [
                "TIPO" => "TP_STRING",
                "VISIBILIDAD" => "TP_VISIBLE",
                "SIZE" => 100,//LONGITUD DEL STRING
                "DEFAULT" => NULL
            ],
            "elim" => [
                "TIPO" => "TP_BOLEANO",
                "VISIBILIDAD" => "TP_BANDERA",
                "NECESARIO" => 0,
                "DEFAULT" => 0
            ]
        ],
        "VISIBLE" => [
            "TEXTO" => "/nombre/",
            "ATTR" => ["nombre"]
        ]
    ],
    "tipoproducto" => [
        "ATRIBUTOS" => [
            "id" => [
                "TIPO" => "TP_PK",
                "VISIBILIDAD" => "TP_INVISIBLE",
                "NECESARIO" => 0,
                "DEFAULT" => "nulo"
            ],
            "autofecha" => [
                "TIPO" => "TP_DATETIME",
                "VISIBILIDAD" => "TP_FECHA",
                "NECESARIO" => 0
            ],
            "nombre" => [
                "TIPO" => "TP_STRING",
                "VISIBILIDAD" => "TP_VISIBLE",
                "SIZE" => 100,//LONGITUD DEL STRING
                "DEFAULT" => NULL
            ],
            "elim" => [
                "TIPO" => "TP_BOLEANO",
                "VISIBILIDAD" => "TP_BANDERA",
                "NECESARIO" => 0,
                "DEFAULT" => 0
            ]
        ],
        "VISIBLE" => [
            "TEXTO" => "/nombre/",
            "ATTR" => ["nombre"]
        ]
    ],
    "tipoenvase" => [
        "ATRIBUTOS" => [
            "id" => [
                "TIPO" => "TP_PK",
                "VISIBILIDAD" => "TP_INVISIBLE",
                "NECESARIO" => 0,
                "DEFAULT" => "nulo"
            ],
            "autofecha" => [
                "TIPO" => "TP_DATETIME",
                "VISIBILIDAD" => "TP_FECHA",
                "NECESARIO" => 0
            ],
            "nombre" => [
                "TIPO" => "TP_STRING",
                "VISIBILIDAD" => "TP_VISIBLE",
                "SIZE" => 100,//LONGITUD DEL STRING
                "DEFAULT" => NULL
            ],
            "elim" => [
                "TIPO" => "TP_BOLEANO",
                "VISIBILIDAD" => "TP_BANDERA",
                "NECESARIO" => 0,
                "DEFAULT" => 0
            ]
        ],
        "VISIBLE" => [
            "TEXTO" => "/nombre/",
            "ATTR" => ["nombre"]
        ]
    ],
    "tipomaterial" => [
        "ATRIBUTOS" => [
            "id" => [
                "TIPO" => "TP_PK",
                "VISIBILIDAD" => "TP_INVISIBLE",
                "NECESARIO" => 0,
                "DEFAULT" => "nulo"
            ],
            "autofecha" => [
                "TIPO" => "TP_DATETIME",
                "VISIBILIDAD" => "TP_FECHA",
                "NECESARIO" => 0
            ],
            "nombre" => [
                "TIPO" => "TP_STRING",
                "VISIBILIDAD" => "TP_VISIBLE",
                "SIZE" => 100,//LONGITUD DEL STRING
                "DEFAULT" => NULL
            ],
            "elim" => [
                "TIPO" => "TP_BOLEANO",
                "VISIBILIDAD" => "TP_BANDERA",
                "NECESARIO" => 0,
                "DEFAULT" => 0
            ]
        ],
        "VISIBLE" => [
            "TEXTO" => "/nombre/",
            "ATTR" => ["nombre"]
        ]
    ],
    "marca" => [
        "ATRIBUTOS" => [
            "id" => [
                "TIPO" => "TP_PK",
                "VISIBILIDAD" => "TP_INVISIBLE",
                "NECESARIO" => 0,
                "DEFAULT" => "nulo"
            ],
            "autofecha" => [
                "TIPO" => "TP_DATETIME",
                "VISIBILIDAD" => "TP_FECHA",
                "NECESARIO" => 0
            ],
            "nombre" => [
                "TIPO" => "TP_STRING",
                "VISIBILIDAD" => "TP_VISIBLE",
                "SIZE" => 100,//LONGITUD DEL STRING
                "DEFAULT" => NULL
            ],
            "elim" => [
                "TIPO" => "TP_BOLEANO",
                "VISIBILIDAD" => "TP_BANDERA",
                "NECESARIO" => 0,
                "DEFAULT" => 0
            ]
        ],
        "VISIBLE" => [
            "TEXTO" => "/nombre/",
            "ATTR" => ["nombre"]
        ]
    ],
    "modelo" => [
        "ATRIBUTOS" => [
            "id" => [
                "TIPO" => "TP_PK",
                "VISIBILIDAD" => "TP_INVISIBLE",
                "NECESARIO" => 0,
                "DEFAULT" => "nulo"
            ],
            "autofecha" => [
                "TIPO" => "TP_DATETIME",
                "VISIBILIDAD" => "TP_FECHA",
                "NECESARIO" => 0
            ],
            "marca_id" => [
                "TIPO" => "TP_RELACION",
                "VISIBILIDAD" => "TP_VISIBLE",
                "NECESARIO" => 1,
                "NOMBRE" => "marca",
                "DEFAULT" => 0,
                "RELACION" => [
                    "ENTIDAD" => "marca",
                    "ATTR" => "id"
                ]
            ],
            "nombre" => [
                "TIPO" => "TP_STRING",
                "VISIBILIDAD" => "TP_VISIBLE",
                "SIZE" => 100,//LONGITUD DEL STRING
                "NECESARIO" => 1,
                "DEFAULT" => NULL
            ],
            "elim" => [
                "TIPO" => "TP_BOLEANO",
                "VISIBILIDAD" => "TP_BANDERA",
                "NECESARIO" => 0,
                "DEFAULT" => 0
            ]
        ],
        "VISIBLE" => [
            "TEXTO" => "/marca_id/, /nombre/",
            "ATTR" => ["marca_id","nombre"]
        ]
    ],
    "categoria" => [
        "ATRIBUTOS" => [
            "id" => [
                "TIPO" => "TP_PK",
                "VISIBILIDAD" => "TP_INVISIBLE",
                "NECESARIO" => 0,
                "DEFAULT" => "nulo"
            ],
            "autofecha" => [
                "TIPO" => "TP_DATETIME",
                "VISIBILIDAD" => "TP_FECHA",
                "NECESARIO" => 0
            ],
            "nombre" => [
                "TIPO" => "TP_STRING",
                "VISIBILIDAD" => "TP_VISIBLE",
                "SIZE" => 100,//LONGITUD DEL STRING
                "DEFAULT" => NULL
            ],
            "elim" => [
                "TIPO" => "TP_BOLEANO",
                "VISIBILIDAD" => "TP_BANDERA",
                "NECESARIO" => 0,
                "DEFAULT" => 0
            ]
        ],
        "VISIBLE" => [
            "TEXTO" => "/nombre/",
            "ATTR" => ["nombre"]
        ]
    ],
    
    "producto" => [
        "ATRIBUTOS" => [
            "id" => [
                "TIPO" => "TP_PK",
                "VISIBILIDAD" => "TP_INVISIBLE",
                "NECESARIO" => 0,
                "DEFAULT" => "nulo"
            ],
            "autofecha" => [
                "TIPO" => "TP_DATETIME",
                "VISIBILIDAD" => "TP_FECHA",
                "NECESARIO" => 0
            ],
            "familia_id" => [
                "TIPO" => "TP_RELACION",
                "VISIBILIDAD" => "TP_VISIBLE",
                "NECESARIO" => 1,
                "NOMBRE" => "familia",
                "DEFAULT" => 0,
                "RELACION" => [
                    "ENTIDAD" => "familia",
                    "ATTR" => "id"
                ]
            ],
            "tipoenvase_id" => [
                "TIPO" => "TP_RELACION",
                "VISIBILIDAD" => "TP_VISIBLE",
                "NECESARIO" => 1,
                "NOMBRE" => "envase",
                "DEFAULT" => 0,
                "RELACION" => [
                    "ENTIDAD" => "tipoenvase",
                    "ATTR" => "id"
                ]
            ],
            "tipoproducto_id" => [
                "TIPO" => "TP_RELACION",
                "VISIBILIDAD" => "TP_VISIBLE",
                "NECESARIO" => 1,
                "NOMBRE" => "producto",
                "DEFAULT" => 0,
                "RELACION" => [
                    "ENTIDAD" => "tipoproducto",
                    "ATTR" => "id"
                ]
            ],
            "tipomaterial_id" => [
                "TIPO" => "TP_RELACION",
                "VISIBILIDAD" => "TP_VISIBLE",
                "NECESARIO" => 1,
                "NOMBRE" => "material",
                "DEFAULT" => 0,
                "RELACION" => [
                    "ENTIDAD" => "tipomaterial",
                    "ATTR" => "id"
                ]
            ],
            "modelo_id" => [
                "TIPO" => "TP_RELACION",
                "VISIBILIDAD" => "TP_VISIBLE",
                "NECESARIO" => 1,
                "NOMBRE" => "modelo",
                "DEFAULT" => 0,
                "RELACION" => [
                    "ENTIDAD" => "modelo",
                    "ATTR" => "id"
                ]
            ],
            "rsf" => [
                "TIPO" => "TP_STRING",
                "VISIBILIDAD" => "TP_VISIBLE",
                "SIZE" => 30,//LONGITUD DEL STRING
                "NECESARIO" => 1,
                "DEFAULT" => NULL
            ],
            "oem" => [
                "TIPO" => "TP_STRING",
                "VISIBILIDAD" => "TP_VISIBLE",
                "SIZE" => 30,//LONGITUD DEL STRING
                "NECESARIO" => 0,
                "DEFAULT" => NULL
            ],
            "cantidad_envase" => [
                "TIPO" => "TP_ENTERO",
                "VISIBILIDAD" => "TP_VISIBLE",
                "NECESARIO" => 1,
                "DEFAULT" => 0
            ],
            "nombre" => [
                "TIPO" => "TP_STRING",
                "VISIBILIDAD" => "TP_VISIBLE",
                "SIZE" => 150,//LONGITUD DEL STRING
                "NECESARIO" => 1,
                "DEFAULT" => NULL
            ],
            "elim" => [
                "TIPO" => "TP_BOLEANO",
                "VISIBILIDAD" => "TP_BANDERA",
                "NECESARIO" => 0,
                "DEFAULT" => 0
            ]
        ],
        "VISIBLE" => [
            "TEXTO" => "/nombre/ (/rsf/)",
            "ATTR" => ["nombre","rsf"]
        ]
    ],
    "productoimg" => [
        "ATRIBUTOS" => [
            "id" => [
                "TIPO" => "TP_PK",
                "VISIBILIDAD" => "TP_INVISIBLE",
                "NECESARIO" => 0,
                "DEFAULT" => "nulo"
            ],
            "autofecha" => [
                "TIPO" => "TP_DATETIME",
                "VISIBILIDAD" => "TP_FECHA",
                "NECESARIO" => 0
            ],
            "foto" => [
                "TIPO" => "TP_IMG",
                "VISIBILIDAD" => "TP_VISIBLE",
                "DEFAULT" => NULL
            ],
            "tecnica" => [
                "TIPO" => "TP_IMG",
                "VISIBILIDAD" => "TP_VISIBLE",
                "NOMBRE" => "ficha técnica",
                "DEFAULT" => NULL
            ],
            "producto_id" => [
                "TIPO" => "TP_RELACION",
                "VISIBILIDAD" => "TP_VISIBLE",
                "NECESARIO" => 1,
                "NOMBRE" => "producto",
                "DEFAULT" => 0,
                "RELACION" => [
                    "ENTIDAD" => "producto",
                    "ATTR" => "id"
                ]
            ],
            "elim" => [
                "TIPO" => "TP_BOLEANO",
                "VISIBILIDAD" => "TP_BANDERA",
                "NECESARIO" => 0,
                "DEFAULT" => 0
            ]
        ]
    ],
]);