---
title: Technische Hinweise
permalink: /guidance/
layout: page
---

## Nationale Berichtsplattform zu den Indikatoren der Deutschen Nachhaltigkeitsstrategie

Die Nationale Berichtsplattform ist ein öffentlich zugängliches Instrument zur Verbreitung und Präsentation von Indikatoren der Nachhaltigkeitsstrategie für Deutschland.

### Unsere Herangehensweise

Die Berichtsplattform
- wird von den nationalen statistischen Ämtern verwaltet;
- enthält offizielle Statistiken und Metadaten nach bewährter Standardmethodik;
- ist öffentlich zugänglich;
- ermöglicht Rückmeldungen von Datennutzern;
- wird mit Open-Source (kostenlosen) Technologien betrieben.


### Quellen

Das Statistische Bundesamt (Destatis) unterstützt aktiv die Entwicklung nationaler Berichtsplattformen, insbesondere als Open-Source Lösung. Vorreiter in diesem Bereich sind die USA und Großbritannien. Sie haben Plattformen entwickelt, um die Indikatoren für die SDGs (Sustainable Development Goals) der Vereinten Nationen darzustellen.

Eine universelle Version des von den USA, Großbritannien und dem Center for Open Data Enterprise entwickelten Codes für eine Berichtsplattform für SDGs ist verfügbar. Auf diesem basiert die Berichtsplattform für die Indikatoren der Deutschen Nachhaltigkeitsstrategie. Wir empfehlen Ihnen, sich mit den SDG-Plattformen in den USA und in Großbritannien sowie mit der entsprechenden [Open SDG-Projektdokumentation](https://open-sdg.readthedocs.io/en/latest/) vertraut zu machen. Diese enthält technische Anweisungen, wie eine Kopie der Open SDG-Plattform erstellt werden kann.

- [SDG-Berichtsplattform USA](https://sdg.data.gov/)

- [SDG-Berichtsplattform GB](https://sustainabledevelopment-uk.github.io)

Der Projektcode für diese Plattform ist im folgenden [GitHub Repository](https://github.com/sustainabledevelopment-deutschland/sustainabledevelopment-deutschland.github.io) öffentlich zugänglich.

Wenn Sie Kommentare oder Feedback zum Open SDG-Projekt haben oder an der Open SDG-Community teilnehmen möchten, wenden Sie sich an [Open SDG GitHub](https://github.com/open-sdg/open-sdg/issues).

### Genutzte Software

#### Back-end IT-Anforderungen:
- GitHub: Hosting der Website, die für die Programmierung von Projekten mit dem Git-Versionskontrollsystem entwickelt wurde.
- Jekyll: Generator für statische Seiten, die in Ruby geschrieben wurden.

#### Front-end IT-Anforderungen:
- XHTML, CSS, JavaScript
- Chartist: JavaScript Bibliothek
- Bootstrap: framework CSS

### Aktuelle Darstellung

Aufgrund von technischen Schwierigkeiten finden sich auf der aktuellen Version der Berichtsplattform einige mangelhafte Darstellungen, auf die an dieser Stelle hingewiesen wird:
- Ganze Zahlen werden ohne Nachkommastelle dargestellt (auch in Zeitreihen, in denen andere Zahlenwerte mit Nachkommastelle vorhanden sind).
- Sehr lange Zeitreihenbezeichnungen werden in den Achsenbeschriftungen der Grafiken nicht in mehrere Zeilen umgebrochen und z.T. abgeschnitten.
