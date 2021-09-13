# note: wrong directories
for i in original/*.webp; do
  printf "Resize $i\n"
  TEMP=${i/64}
  convert "$i" -quality 30 -resize x64 "${TEMP/\.webp/}".webp
done
