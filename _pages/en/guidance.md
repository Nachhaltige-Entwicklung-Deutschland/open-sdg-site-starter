---
title: Technical Guidance
permalink: /en/guidance/
layout: page
language: en
---

The Federal Statistical Office (Destatis) supports actively the development of national reporting platforms, especially as an open source solution. The USA and the United Kingdom are pioneers in this area of expertise. They have developed platforms in order to present the indicators for the SDG’s (Sustainable Development Goals) of the United Nations.

There is an universal version of the code for a reporting platform for the SDGs available. The USA, the United Kingdom, and the Center for Open Data Enterprise have developed it. The reporting platform for the indicators of the German Sustainable Development Strategy uses the universal code. If you are interested, we recommend to have a look at the SDG-platforms of US and of the United Kingdom as well as at the [Open SDG-project documentation](https://open-sdg.readthedocs.io/en/latest/). There are instruction on how to copy the Open SDG platform.

- [SDG- reporting platform USA](https://sdg.data.gov/)
- [SDG- reporting platform UK](https://sustainabledevelopment-uk.github.io/)

The project code for this platform is available to the public in the following [GitHub Repository](https://github.com/sustainabledevelopment-deutschland/sustainabledevelopment-deutschland.github.io).

If you want to comment or give feedback to the Open SDG-project or if you elsewise want to be part of the Open SDG-community, kindly contact [Open SDG GitHub](https://github.com/open-sdg/open-sdg/issues).

### Used Software

#### Back-end IT-requirements:

- GitHub: Hosting of the website which was developed for the programming of projects with the GIT-version controll system.
- Jekyll: Generator for statistical sites written in Ruby.

#### Front-end IT-requirements:

- XHTML, CSS, JavaScript
- Chartist: JavaScript library
- Bootstrap: framework CSS

### Shortcomings of the current presentation

There are still technical difficulties. Currently we cannot properly present the following issues:

- Whole numbers are always displayed without any decimal places – even though there might be other numbers in the same data set that have decimal places (which are shown).
- Axis labels cannot be wrapped to the next line. Instead very long titles of time series are partly cut off on axis labels.
- In charts, super- and subscripted numbers and letters in tooltips for single data points are not correctly displayed.
- In charts, the names of data series in tooltips for individual data points are not wrapped to the next line.
