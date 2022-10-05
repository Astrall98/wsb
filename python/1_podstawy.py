print("Hello world! xD");
x=10.95
print(x)
print("{:.2f}".format(x))

#potęgowanie
pow=2**10
print(pow)

#pobieranie danych z klawiatury
x=2
x^=4
print(x)

#konkatenacja
name=input()
print("Twoje imie to " + name)

length=len(name)
print(length)
print()
firstLetter=name[0]
print(type(name))
print(type(x))
y=10.5
print(type(y))
print("\nPodaj swoj wiek: ", end="")
lastLetter=name[length-1]
#lub lastLetter=name[-1]
print(lastLetter)

#konwersja
x="5"
print(type(x))
x=int(x)
print(type(x))

x=x/2
print(x)
print(type(x))

surname="Kowalski"
print()
print(surname[0])#K

#substring
print(surname[0:3])#Kow - od indeksu 0 wyświetl 3 znaki
print(surname[0].lower())
print(surname[:-2]) #Kowals
print(surname[:-2:2]) #Kwl
