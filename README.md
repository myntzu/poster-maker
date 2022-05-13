# Automated Poster Generator System
*This project was developed as part of my contributions made during my internship at goSMAC Sdn. Bhd.*

Note: (name)-poster.php represents Webinar Poster layouts while (name)-poster1.php represents Business Poster layouts. In order to capture and render the poster canvas, the external html2canvas.js library was imported into this project for this purpose.

## The Problem:
In order to promote events and webinar sessions that are regularly hosted by the organization, members from the marketing team and administrative department are required to go through the tedious process of manually creating posters for those upcoming events. This involves them having to search for background images and design layouts that are appropriate for various sizes (i.e. desktop-view, mobile-view and social media).
Hence, the manual process of creating posters for these events are time-consuming, lacks standardization and quality consistency that are expected for the organization - given that different members have different approaches towards creativity and tools/resources used to design them (e.g. some will use Canva, others may prefer to design using Adobe suites). Employees claim that the overall process requires them at least 30 minutes to an hour to produce a single poster design for 3 different screen sizes as mentioned previously.

## The Solution:
To ensure consistency of poster designs as well as to standardize the overall process of creating posters, the development of an Automated Poster Generator System (APGS) was proposed with the aim to help optimize the performance and increase productivity of employees who are responsible for such tasks.
Moreover, the APGS will be integrated into the organization's existing Webinar Management System (WMS) to centralize procedures within the company.

## Requirement Specification(s):
The following describes the different poster size dimensions that are required for display on various platforms (in pixels):
  - On website      : Landscape *(1278x596)*
  - On mobile       : Portrait *(414x592)*
  - On social media : SNS *(500x500)*

Programming Language(s) Used:
  - JavaScript, PHP, CSS

Functional & Non-Functional Requirements:
  - The user will be able to select the type of poster they wish to create. (e.g. A Business Poster omits certain features made for a Webinar Poster)
  - The system shall be able to generate posters for 3 different dimensions at one time.
  - The system shall allow the user to upload image and input details for 1 Speaker only (Webinar Poster).
  - The system shall be able to capture real-time data input provided by the user, and this information will be automatically captured into each poster for rendering.
  - The system shall allow the user to select from 10 various background images provided OR to upload their own background image into each poster.
  - The system shall allow the user to enter texts, pick and display the appropriate date and time for the event on the poster.
  - The system will take no more than 5 minutes to render and generate a poster of 3 different dimensions...*and more*

## The Outcome & Future Work:
The final version of the APGS was successfully integrated into its intended environment (WMS) where it will be used and accessed by goSMAC employees to create posters with ease.
The codes in this repository represent the last version of the APGS produced from past iterations based on feedback and testing; prior to its software integration stage.

In the future, the APGS is expected to evolve in a way that it shall be able to accommodate the inclusion of multiple "Speaker" options into the existing Webinar Poster framework. Moreover, it is expected that the APGS will allow for the user to select from multiple color schemes to further enhance the design of posters.
