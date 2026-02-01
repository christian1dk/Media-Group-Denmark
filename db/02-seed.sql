SET NAMES utf8mb4;
-- Seed data for table `job_positions`
-- Vi bruger INSERT IGNORE med faste ID'er for at undgå duplikater

INSERT IGNORE INTO job_postings (id, title, description, company, location, job_type, is_remote, created_at) VALUES
(1, 'PHP Udvikler', 'Vi søger en dygtig PHP-udvikler til vores team i Aarhus.', 'Media Group Denmark', 'Aarhus', 'Fuldtid', 0, '2026-01-01 10:00:00'),
(2, 'Frontend Udvikler', 'Er du en haj til CSS og React? Så har vi brug for dig.', 'WebDesign ApS', 'København', 'Fuldtid', 1, '2026-01-02 11:30:00'),
(3, 'Salgsassistent', 'Hjælp vores kunder med at finde de rette løsninger.', 'Butik 123', 'Odense', 'Deltid', 0, '2026-01-05 09:15:00'),
(4, 'Marketing Praktikant', 'Lær alt om digital markedsføring hos os.', 'AdAgency', 'Aarhus', 'Praktik', 1, '2026-01-10 14:00:00'),
(5, 'System Administrator', 'Drift og vedligeholdelse af vores serversystemer.', 'CloudTech', 'Aarhus', 'Fuldtid', 0, '2026-01-12 08:45:00'),
(6, 'UX Designer', 'Skab gode brugeroplevelser for vores kunder.', 'Design-Huset', 'København', 'Kontrakt', 1, '2026-01-15 16:20:00'),
(7, 'Backend Udvikler', 'Vi søger en backend-udvikler med erfaring i MySQL.', 'DataSolutions', 'Aalborg', 'Fuldtid', 0, '2026-01-18 10:10:00'),
(8, 'Social Media Manager', 'Styr vores sociale medier og skab engagement.', 'TrendSetter', 'Aarhus', 'Deltid', 1, '2026-01-20 13:00:00'),
(9, 'IT-Support', 'Hjælp vores kolleger med IT-udfordringer.', 'SupportTeam', 'Roskilde', 'Fuldtid', 0, '2026-01-22 11:00:00'),
(10, 'Systemudvikler', 'Arbejd på komplekse softwareløsninger.', 'BigTech Corp', 'Billund', 'Fuldtid', 0, '2026-01-25 15:45:00'),
(11, 'Tekstforfatter', 'Skriv fængslende tekster til vores kampagner.', 'WordSmiths', 'København', 'Deltid', 1, '2026-01-26 09:00:00'),
(12, 'SEO Specialist', 'Optimér vores synlighed på Google.', 'SearchExperts', 'Odense', 'Kontrakt', 1, '2026-01-28 10:30:00'),
(13, 'Systemudvikler', 'Udvikling af avancerede desktop og cloud løsninger.', 'SoftSystems', 'Aarhus', 'Fuldtid', 0, '2026-01-30 14:15:00'),
(14, 'Database Specialist', 'Ekspert i optimering af SQL-forespørgsler.', 'DB-Experts', 'Remote', 'Fuldtid', 1, '2026-01-31 11:20:00'),
(15, 'Projektleder', 'Styr vores IT-projekter sikkert i mål.', 'Management ApS', 'Aalborg', 'Fuldtid', 0, '2026-02-01 08:00:00'),
(16, 'Fullstack Udvikler', 'En profil der kan både frontend og backend.', 'FullStackers', 'Vejle', 'Fuldtid', 1, '2026-02-01 09:30:00'),
(17, 'Dataanalytiker', 'Hjælp os med at forstå vores data bedre.', 'InsightGroup', 'København', 'Fuldtid', 0, '2026-02-01 10:00:00'),
(18, 'Kundeservice', 'Besvar opkald og e-mails fra vores glade kunder.', 'ServiceFirst', 'Horsens', 'Deltid', 0, '2026-02-01 11:15:00'),
(19, 'Grafisk Designer', 'Skab visuelt indhold til web og print.', 'CreativeMind', 'Aarhus', 'Praktik', 0, '2026-02-01 12:00:00'),
(20, 'Sikkerhedsspecialist', 'Sikr vores systemer mod udefrakommende trusler.', 'CyberSafe', 'København', 'Fuldtid', 1, '2026-02-01 12:30:00');
