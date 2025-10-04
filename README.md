# AuraFarmVill - Local development

This README explains how to run the project locally using XAMPP on Windows.

## Quick start
1. Open XAMPP Control Panel and start Apache and MySQL.
2. Place the project under XAMPP's `htdocs` folder. The project lives at:
   `C:\xampp\htdocs\AuraFarmVill\AuraFarmVill` (your current path may include a space `Aura Farmvil`).
3. Recommended: remove the space in the parent folder to simplify URLs.
   - PowerShell example:
     ```powershell
     Rename-Item 'C:\xampp\htdocs\Aura Farmvil' 'C:\xampp\htdocs\AuraFarmVil'
     ```
4. Open the site in your browser:
   - If folder renamed: `http://localhost/AuraFarmVil/AuraFarmVill/index.php`
   - If not: `http://localhost/Aura%20Farmvil/AuraFarmVill/index.php`
5. Verify DB connection: open `testdb.php`:
   - `http://localhost/AuraFarmVil/AuraFarmVill/testdb.php`

## Security note
- A one-time `setup.php` script was used to import the database and has been removed. Do not create similar files in production.
- Keep `display_errors` enabled only during development.

## Troubleshooting
- 404 Not Found: check the folder path under `C:\xampp\htdocs` and use URL-encoding for spaces.
- DB connection error: verify your credentials in `assests/config/dbconfig.php` and that MySQL is running.

If you want, I can rename the parent folder for you to remove the space and update the README accordingly.
