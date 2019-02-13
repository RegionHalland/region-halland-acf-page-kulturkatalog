# Visa kulturhändelser

## Hur man använder Region Hallands plugin "region-halland-acf-page-kulturkatalog"

Nedan följer instruktioner hur du kan använda pluginet "region-halland-acf-page-kulturkatalog".


## Användningsområde

Denna plugin ger möjlighet att skapa poster med kulturhändelser


## Installation och aktivering

```sh
A) Hämta pluginen via Git eller läs in det med Composer
B) Installera Region Hallands plugin i Wordpress plugin folder
C) Aktivera pluginet inifrån Wordpress admin
```


## Hämta hem pluginet via Git

```sh
git clone https://github.com/RegionHalland/region-halland-acf-page-kulturkatalog.git
```


## Läs in pluginen via composer

Dessa två delar behöver du lägga in i din composer-fil

Repositories = var pluginen är lagrad, i detta fall på github

```sh
"repositories": [
  {
    "type": "vcs",
    "url": "https://github.com/RegionHalland/region-halland-acf-page-kulturkatalog.git"
  },
],
```
Require = anger vilken version av pluginen du vill använda, i detta fall version 1.0.0

OBS! Justera så att du hämtar aktuell version.

```sh
"require": {
  "regionhalland/region-halland-acf-page-kulturkatalog": "1.0.0"
},
```


## Visa allt innehåll via "Blade" på en sida

```sh
<ol>
  <li>Typ: {{ get_region_halland_acf_page_kulturkatalog_type_name() }}</li>
  <li>Publik: {{ get_region_halland_acf_page_kulturkatalog_publik() }}</li>
  <li>Speltid: {{ get_region_halland_acf_page_kulturkatalog_speltid() }}</li>
  <li>Lokal: {{ get_region_halland_acf_page_kulturkatalog_lokal() }}</li>
  <li>Turnéperiod: {{ get_region_halland_acf_page_kulturkatalog_turne_period() }}</li>
  <li>Pris: {{ get_region_halland_acf_page_kulturkatalog_pris() }}</li>
</ol>
```        


## Versionhistorik

### 1.0.0
- Första version