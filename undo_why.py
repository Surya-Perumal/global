import os
import re

directory = '.'

fixed_count = 0

for filename in os.listdir(directory):
    if filename.startswith('study_in_') or filename.startswith('study-in-') or filename.startswith('study-mbbs-in-'):
        if not filename.endswith('.php'):
            continue
        
        # Skip Canada and New Zealand which are already fixed
        if 'canada' in filename.lower() or 'newzealand' in filename.lower():
            continue

        filepath = os.path.join(directory, filename)
        
        try:
            with open(filepath, 'r', encoding='utf-8') as f:
                content = f.read()
        except UnicodeDecodeError:
            with open(filepath, 'r', encoding='latin-1') as f:
                content = f.read()

        # Extract country name from filename
        country = filename.replace('study_in_', '').replace('study-in-', '').replace('study-mbbs-in-', '').replace('.php', '')
        country = country.replace('-', ' ').title()

        pattern = r'<h2 class="section-title">\s*Why Choose The Global Ties\?\s*</h2>\s*<p class="hero-description">.*?</p>'
        
        replacement = f'''<span class="gold-label">World-Class Education | the global ties</span>

                    <h2 class="section-title">
                        Why Study in
                        <span class="accent-text">{country.upper()}</span>
                    </h2>

                    <p class="hero-description">
                        {country} has one of the most respected education systems in the world. Every year, thousands of students from other countries pursue their educational goals in {country}, drawn by its welcoming culture and safe environment.
                        <br><br>
                        With excellent opportunities to gain valuable work experience during and after your studies, the advantages of studying in {country} are immense. There are also promising pathways for international students who wish to build a career after graduating from post-secondary programs in {country}.
                    </p>'''

        new_content = re.sub(pattern, replacement, content, flags=re.DOTALL)

        if new_content != content:
            with open(filepath, 'w', encoding='utf-8') as f:
                f.write(new_content)
            print(f"Fixed {filename}")
            fixed_count += 1

print(f"Total files fixed: {fixed_count}")
