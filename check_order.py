import os

files = ['toefl.php', 'sat.php', 'pte.php', 'oet.php', 'gre.php', 'ielts.php', 'gmat.php', 'german.php', 'french.php', 'duolingo.php']

for f in files:
    try:
        with open(f, 'r', encoding='utf-8') as file:
            content = file.read()
            idx_faq = content.find('Frequently Asked Questions')
            idx_cta = content.find('Ready to Achieve Your Target Score?')
            if idx_faq != -1 and idx_cta != -1:
                if idx_faq < idx_cta:
                    print(f"{f}: FAQs before CTA (NEEDS FIX)")
                else:
                    print(f"{f}: CTA before FAQs (OK)")
            else:
                print(f"{f}: Missing one or both sections")
    except Exception as e:
        pass
