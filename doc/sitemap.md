# Dokumentation Modul: Sitemap

![open-apexx-logo](logo_open-apexx_256.png)

Modulinfo||
-|-
Stand|19.12.2020
Version|1.0.0
Author|Carsten Grings
Requirements|main (1.2.0)
Dependencies|-

## 1 ADMINISTATION

Keine Funktionen vorhanden.

## 2 TEMPLATE-DATEIEN

Template-Datei | Beschreibung
-|-
`sitemap.html`|Zeigt links zu allen Inhalten der Webseite an, die das Sitemap-Modul unterstützen
`google.html`|Erstellt den gleichen Inhalte wie `sitemap.html` jedoch in einem Format weelches von Google gelesen werden kann.

Weitere Informationen zum Sitemap-Format sind hier zu finden:

[Google developer](https://developers.google.com/search/docs/advanced/sitemaps/build-sitemap?hl=de#sitemapformat)

[Sitemaps.org](https://www.sitemaps.org/protocol.html)

## 2.1 Template-Datein `sitemap.html`, `google.html`

Sitemap definiert eine Liste von Modulen, die das Sitemap-Modul unterstützen. Jedes Modul erstellt eine Liste an Inhalten (title, link) die in der Sitemap angezeigt werden sollen. Außerdem kann jedes Modul ein `LEVEL` definieren. Dies wird zur besseren Übersicht verwendet um Einrückungen zu machen.

```apexx-template
MODULE = list of modules
    MODULE.TITLE = List of Module Titles
    MODULE.RESULT = Content tree of this module
        RESULT.LEVEL = Level of the content
        RESULT.TITLE = Title of the content
        RESULT.LINK = Link to the content
```

## 3 TEMPLATE-FUNKTIONEN

Keine Funktionen definiert.

## 4 ERWEITERTRE FUNKTIONALITÄT

Keine erweiterte Funktionalität definiert.