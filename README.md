# Construction site management system DB set up

My approach

1. All operations on the database are not included in the database/migartions/seeds/models (CRUD).Based on the princle of separation of concerns, any action on the database should be done on the controller or a repository based on the design pattern used.
2. All notifications are grouped to a single notification table and flagged(Type column) based on the eevent triggered, be it, SMS apis, Emails, Whatsapp API and other alerts.
3. Contact and Staffs are users, filtered by the roles and permissions on what they can do and see on the database.
4. Make contacts private – only show to relevant/authorized person(permissions table filters what certain group of users can see and do on the system )
5.Task reminder with calendar also notify user for this we just develop a custom notification and call it at a perticular date and time, by using a job/schedular or custom helper on the user class (Snooze provides a trait for your models called SnoozeNotifiable that adds a notifyAt() method:)
6. Cost estimation per floor and whole project --cost of the whole project is calculated in dynamically on the Controller/repository.
7.SMS alert to customer for pending payments and on receiving payments(Done using Alerts and Notifications). Same as Rent collection alert to owner.
8. Reports and details of Income/Expenses/Purchasing..To be generated in real time on the UI.
9.Staff designations are to be set as Roles in the roles table.
10.For presale and templates for tender/newspaper ads/notices, we used templates table and WYSIWYG for designing a custom page using a tinymce or other html.
11. To avoid Data redundancy, Reports are to be generated in real time see attached. ##Image on Reports
