f = open("a.txt", "r")
w = open("adj.txt", "w")

lines = f.read().splitlines()

for x in range(len(lines)):
    if x != len(lines)-1:
        if x == 0:
            w.write(lines[x]+'\n')
        elif lines[x-1]+'s' == lines[x]:
            x=x
        else:
            w.write(lines[x]+'\n')
    else:
        w.write(lines[x])

w.close()

print (lines[1] == lines[0]+'s')

