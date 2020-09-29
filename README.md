# Construction site management system DB set up

My approach

1. All operations againist the database are not included in the database/migartions/seeds/models (CRUD).Based on the princle of separation of concerns, any action on the database should be done on the controller or a repository based on the design pattern used.
2. All notifications are grouped to a single notification table and flagged based on the eevent triggered, be it, SMS apis, Emails, Whatsapp API and other alerts.
3. Contact and Staffs are users, filtered by the roles and permissions on what they can do and see on the database.
4. Contacts groups and Staff designations are set as Roles in the roles table.
5. To avoid Data redundancy, Reports are to be generated in real time see attached.
##Add AN Image on Reports
