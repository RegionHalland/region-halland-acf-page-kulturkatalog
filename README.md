# Visa kulturhändelser

## Hur man använder Region Hallands plugin "region-halland-acf-page-kulturkatalog"

Nedan följer instruktioner hur du kan använda pluginet "region-halland-acf-page-kulturkatalog".


## Användningsområde

Denna plugin ger möjlighet att skapa poster med kulturhändelser

OBS! Enskilda poster visas på sidan "single-kulturkatalog.blade.php"
OBS! Listan med poster visas på sidan "archive-kulturkatalog.blade.php"

Båda dessa filer finns med i foldern "views"

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
  <li>
      Typ:
      @php($arrLabels = get_region_halland_acf_page_kulturkatalog_type_labels())  
      @if(isset($arrLabels))
        @foreach ($arrLabels as $label)
          {{ $label['label'] }}, 
        @endforeach
      @endif
  </li>
  <li>Publik: {{ get_region_halland_acf_page_kulturkatalog_publik() }}</li>
  <li>Speltid: {{ get_region_halland_acf_page_kulturkatalog_speltid() }}</li>
  <li>Lokal: {{ get_region_halland_acf_page_kulturkatalog_lokal() }}</li>
  <li>Turnéperiod: {{ get_region_halland_acf_page_kulturkatalog_turne_period() }}</li>
  <li>Pris: {{ get_region_halland_acf_page_kulturkatalog_pris() }}</li>
</ol>
```


## Lista allt innehåll via "Blade" på en sida

```sh
@php($myItems = get_region_halland_acf_page_kulturkatalog_items())
@foreach($myItems as $item)
  <h2>{{ $item->post_title }}</h2><br>
  <span>{{ $item->post_content }}</span><br><br>
  <span>
    <strong>Typ:</strong>
    @foreach($item->labels as $label)
      {{ $label['label'] }}
    @endforeach
  </span><br>
  <span><strong>Målgrupp:</strong> {{ $item->malgrupp }}</span><br>
  <span><strong>Publik:</strong> {{ $item->publik }}</span><br>
  <span><strong>Speltid:</strong> {{ $item->speltid }}</span><br>
  <span><strong>Lokal:</strong> {{ $item->lokal }}</span><br>
  <span><strong>Period:</strong> {{ $item->period }}</span><br>
  <span><strong>Pris:</strong> {{ $item->pris }}</span><br><br><br>
@endforeach
```


## Exempel på array

```sh
array (size=3)
  0 => 
    object(WP_Post)[6655]
      public 'ID' => int 736
      public 'post_author' => string '11' (length=2)
      public 'post_date' => string '2019-02-15 14:03:26' (length=19)
      public 'post_date_gmt' => string '2019-02-15 14:03:26' (length=19)
      public 'post_content' => string 'En dansclownföreställning för barn i åldern 6-10 år' (length=51)
      public 'post_title' => string 'Extrem(is)t Kul - En dansclownföreställning' (length=45)
      public 'post_excerpt' => string '' (length=0)
      public 'post_status' => string 'publish' (length=7)
      public 'comment_status' => string 'closed' (length=6)
      public 'ping_status' => string 'closed' (length=6)
      public 'post_password' => string '' (length=0)
      public 'post_name' => string 'extremist-kul-en-clowndansforestallning' (length=39)
      public 'to_ping' => string '' (length=0)
      public 'pinged' => string '' (length=0)
      public 'post_modified' => string '2019-03-13 13:43:36' (length=19)
      public 'post_modified_gmt' => string '2019-03-13 13:43:36' (length=19)
      public 'post_content_filtered' => string '' (length=0)
      public 'post_parent' => int 0
      public 'guid' => string 'http://exempel.se/?post_type=kulturkatalog&#038;p=736' (length=53)
      public 'menu_order' => int 0
      public 'post_type' => string 'kulturkatalog' (length=13)
      public 'post_mime_type' => string '' (length=0)
      public 'comment_count' => string '0' (length=1)
      public 'filter' => string 'raw' (length=3)
      public 'url' => string 'http://exempel.se/kulturkatalog/extremist-kul-en-clowndansforestallning/' (length=72)
      public 'image' => string '' (length=0)
      public 'image_url' => boolean false
      public 'date' => string '2019-02-15' (length=10)
      public 'labels' => 
        array (size=2)
          0 => 
            array (size=1)
              'label' => string 'Dans' (length=4)
          1 => 
            array (size=1)
              'label' => string 'Film' (length=4)
      public 'malgrupp' => string '6–10 år' (length=10)
      public 'publik' => string '70 pers inkl. personal' (length=22)
      public 'speltid' => string '45 min' (length=6)
      public 'lokal' => string 'Spelyta exkl. sittplatser: 6x8x2,5m' (length=35)
      public 'period' => string 'Enligt överenskommelse.' (length=24)
      public 'pris' => string 'Pris i Halland: 1:a föreställningen: 1500 kr' (length=45)
  1 => 
    object(WP_Post)[6659]
      public 'ID' => int 608
      public 'post_author' => string '1' (length=1)
      public 'post_date' => string '2019-02-13 15:54:27' (length=19)
      public 'post_date_gmt' => string '2019-02-13 15:54:27' (length=19)
      public 'post_content' => string 'Lär dig att jonglera med både bollar och käglor' (length=47)
      public 'post_title' => string 'Lär dig jonglera' (length=16)
      public 'post_excerpt' => string '' (length=0)
      public 'post_status' => string 'publish' (length=7)
      public 'comment_status' => string 'closed' (length=6)
      public 'ping_status' => string 'closed' (length=6)
      public 'post_password' => string '' (length=0)
      public 'post_name' => string 'lar-dig-jonglera' (length=16)
      public 'to_ping' => string '' (length=0)
      public 'pinged' => string '' (length=0)
      public 'post_modified' => string '2019-03-13 13:44:16' (length=19)
      public 'post_modified_gmt' => string '2019-03-13 13:44:16' (length=19)
      public 'post_content_filtered' => string '' (length=0)
      public 'post_parent' => int 0
      public 'guid' => string 'http://exempel.se/?post_type=kulturkatalog&#038;p=608' (length=53)
      public 'menu_order' => int 0
      public 'post_type' => string 'kulturkatalog' (length=13)
      public 'post_mime_type' => string '' (length=0)
      public 'comment_count' => string '0' (length=1)
      public 'filter' => string 'raw' (length=3)
      public 'url' => string 'http://exempel.se/kulturkatalog/lar-dig-jonglera/' (length=50)
      public 'image' => string '' (length=0)
      public 'image_url' => boolean false
      public 'date' => string '2019-02-13' (length=10)
      public 'labels' => 
        array (size=2)
          0 => 
            array (size=1)
              'label' => string 'Konst' (length=5)
          1 => 
            array (size=1)
              'label' => string 'Kulturarv' (length=9)
      public 'malgrupp' => string 'Både vuxna och barn' (length=20)
      public 'publik' => string 'Hela familjen är välkommen!' (length=29)
      public 'speltid' => string '120 minuter' (length=11)
      public 'lokal' => string 'Stora hallen' (length=12)
      public 'period' => string 'Under mars månad' (length=17)
      public 'pris' => string '120 kronor' (length=10)
```

## Versionhistorik

### 1.2.0
- Välja en eller flera typer, ex dans, film
- funktion för att lista poster från kulturkatalogen 

### 1.1.0
- Adderat has_archive = true för att kunnna ha en arkiv-sida

### 1.0.0
- Första version