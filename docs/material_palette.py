import re
from PIL import Image, ImageDraw, ImageFont

scss_file = 'core/app/shell/src/themes/suite8/css/abstracts/_variables.scss'

colors = {}
pattern = re.compile(r'^\$(google-[a-z]+):\s*(#[0-9a-fA-F]{6});')
with open(scss_file) as f:
    for line in f:
        m = pattern.match(line.strip())
        if m:
            colors[m.group(1)] = m.group(2)

swatch_width = 100
swatch_height = 100
img = Image.new('RGB', (swatch_width * len(colors), swatch_height), 'white')
draw = ImageDraw.Draw(img)
font = ImageFont.load_default()

for i, (name, color) in enumerate(colors.items()):
    x = i * swatch_width
    draw.rectangle([x, 0, x + swatch_width, swatch_height], fill=color)
    text = name.replace('google-', '')
    bbox = draw.textbbox((0, 0), text, font=font)
    w = bbox[2] - bbox[0]
    h = bbox[3] - bbox[1]
    draw.text((x + (swatch_width - w)/2, swatch_height - h - 4), text, fill='black', font=font)

img.save('docs/material_palette.png')
print('Saved docs/material_palette.png with colors:', colors)
