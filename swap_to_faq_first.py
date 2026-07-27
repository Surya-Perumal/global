import os
import re

files = ['toefl.php', 'sat.php', 'pte.php', 'oet.php', 'gre.php', 'ielts.php', 'gmat.php', 'german.php', 'french.php', 'duolingo.php']

for filename in files:
    if os.path.exists(filename):
        with open(filename, 'r', encoding='utf-8') as f:
            content = f.read()
            
        faq_marker = '<!-- FAQs -->'
        cta_marker = '<!-- Footer CTA -->'
        
        idx_faq = content.find(faq_marker)
        idx_cta = content.find(cta_marker)
        
        if idx_faq != -1 and idx_cta != -1:
            if idx_cta < idx_faq:
                print(f"Fixing {filename}...")
                
                # We need to extract the exact blocks.
                # Assuming CTA block ends at the start of FAQ block (minus whitespace)
                # and FAQ block ends at <!-- Footer -->
                
                # find start of CTA
                start_cta = content.find(cta_marker)
                # find end of CTA / start of FAQ
                start_faq = content.find(faq_marker)
                # find end of FAQ / start of Footer
                start_footer = content.find('<!-- Footer -->')
                
                if start_cta != -1 and start_faq != -1 and start_footer != -1:
                    cta_block = content[start_cta:start_faq]
                    faq_block = content[start_faq:start_footer]
                    
                    new_content = content[:start_cta] + faq_block + cta_block + content[start_footer:]
                    
                    with open(filename, 'w', encoding='utf-8') as f:
                        f.write(new_content)
                else:
                    print(f"Could not find boundaries in {filename}")
            else:
                print(f"{filename} is already FAQ before CTA")
        else:
            print(f"Missing sections in {filename}")
