import os
import re

directory = 'c:/xampp/htdocs/global'

new_options = """<option value="" disabled selected>Select Course/Destination Interested In</option>
                  <optgroup label="Test Preparation">
                    <option value="IELTS">IELTS</option>
                    <option value="TOEFL">TOEFL</option>
                    <option value="PTE">PTE</option>
                    <option value="OET">OET</option>
                    <option value="SAT">SAT</option>
                    <option value="GRE">GRE</option>
                    <option value="GMAT">GMAT</option>
                    <option value="Duolingo">Duolingo</option>
                    <option value="French">French Language</option>
                    <option value="German">German Language</option>
                  </optgroup>
                  <optgroup label="Study Abroad">
                    <option value="Study in USA">Study in USA</option>
                    <option value="Study in UK">Study in UK</option>
                    <option value="Study in Canada">Study in Canada</option>
                    <option value="Study in Australia">Study in Australia</option>
                    <option value="Study in New Zealand">Study in New Zealand</option>
                    <option value="Study in Ireland">Study in Ireland</option>
                    <option value="Study in Germany">Study in Germany</option>
                    <option value="Study in France">Study in France</option>
                    <option value="Study in Singapore">Study in Singapore</option>
                    <option value="Study in Dubai">Study in Dubai</option>
                    <option value="Study in Switzerland">Study in Switzerland</option>
                    <option value="Study in Spain">Study in Spain</option>
                    <option value="Study in Italy">Study in Italy</option>
                    <option value="Study in Sweden">Study in Sweden</option>
                    <option value="Study in Denmark">Study in Denmark</option>
                  </optgroup>
                  <optgroup label="Medical">
                    <option value="Study MBBS Abroad">Study MBBS Abroad</option>
                  </optgroup>
                  <option value="Other">Other</option>"""

# Regex pattern to match the options inside the select name="course"
pattern = re.compile(r'(<select[^>]*name="course"[^>]*>)\s*<option.*?Other</option>', re.IGNORECASE | re.DOTALL)

count = 0
for root, dirs, files in os.walk(directory):
    for file in files:
        if file.endswith(".php"):
            path = os.path.join(root, file)
            with open(path, 'r', encoding='utf-8', errors='ignore') as f:
                content = f.read()
            
            new_content, num_subs = pattern.subn(rf'\1\n                  {new_options}', content)
            
            if num_subs > 0:
                with open(path, 'w', encoding='utf-8') as f:
                    f.write(new_content)
                count += 1
                print(f"Updated {file}")

print(f"Total files updated: {count}")
