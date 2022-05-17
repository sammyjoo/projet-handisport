
//https://opendata.paris.fr/api/records/1.0/search/?dataset=nombre-de-beneficiaires-en-situation-de-handicap-sur-les-principales-aides-du-ca&q=&facet=types_d_aides&facet=exercice

let dataParis            = "https://opendata.paris.fr/api/records/";
let version             = "1.0/";
let question            = "search/?dataset=";
let datasetID           = "nombre-de-beneficiaires-en-situation-de-handicap-sur-les-principales-aides-du-ca&q=";
let rows                = "&rows="+200;
let sort                = "&sort=trafic";
let facetrequest        = "&facet=";
let facets              = facetrequest + "types_d_aides"+facetrequest+"exercice"+facetrequest+"beneficiaires_handicapes"+facetrequest+"record_timestamp";
