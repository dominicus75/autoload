# autoload
Simple psr-4 style autolader with gettext settings

Directory structure:

yourProject/
- app/
- public/
- src/
-     namespace/
-       subnamespace/
-         src/ [classes of subnamespace here]
-           Example.php
-         locale/
-           hu/
-             LC_MESSAGES/ [.pot, .po and .mo files here]
-               Example.pot
-               Example.po
-               Example.mo
-           de/
-             LC_MESSAGES/ [.pot, .po and .mo files here]
-               Example.pot
-               Example.po
-               Example.mo
 
