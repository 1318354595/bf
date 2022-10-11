import os
import commands

print('====================ls')
os.system('ls')
print('====================df')
df = os.popen('df -ah').read()
print(df)
