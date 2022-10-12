#x=input("Podaj wartość: ")
x=5
if x=="10":
    print("Podałeś 10")
else:
    print("Inna wartość niż 10")
y=False
if y: print("Prawda")
else: print("Fałsz")
'''
Użytkownik podaje wartości trzech zmiennych x, y, z
Wyświetl, która z tych trzech wartości jest największa
'''
tab=[input("Podaj x: "),input("Podaj y: "), input("Podaj z: ")]
najw=tab[0]
for val in tab:
    if val>najw: najw=val
print("Najwyższa wartość: %s" % (najw))
