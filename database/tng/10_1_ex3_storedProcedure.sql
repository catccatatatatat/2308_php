<?php
for y in range(3):
    for space in range(0, 2-y):
        print(" ", end="")
    for star in range(2, 1-y, -1):
        print("*", end="")
    print()

# ===== while ====
y=0
while y<3:
  space=0
  star=0
  while space < 2-y:
    print(" ", end='')
    space += 1    
  while 1-y < star and star <= 2:
    print("*", end='')    
    star -= 1
  print()
  y+=1 
?>