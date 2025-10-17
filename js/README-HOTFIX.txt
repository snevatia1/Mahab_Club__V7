HOW TO APPLY THE HOTFIX
1) Upload these files into your repo (overwrite existing):
   - js/dataLoader.js
   - js/app.js
2) Hard refresh the site:
   - Ctrl+F5  (or add ?v=hotfix to the URL, e.g., .../?v=hotfix)
This version:
- Never crashes if /data/rooms.json is missing or blocked.
- Renders calendar + assistant + dropdowns regardless.
- Uses safe fallback rooms (A1..A39) if needed.
