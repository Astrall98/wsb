'''
Dodaj listę o nazwie: country
Przypisz do niej 5 elementów
Poproś użytkownika, aby dodał dwa nowe elementy do listy
Uzytkownikowi wyświetl listę do wyboru:
1) Wyświetl pierwsze 3 elementy listy
2) Wyświetl elementy listy, które dodałem (dane pobierz z listy)
3) Wyświetl zawartość listy
4) Wyczyść zawartość listy
5) Znajdź element w liście, który poda użytkownik (wyświetl czy jest dodany do listy)
Użytkownik raz dokonuje wyboru z listy.
Wyświetl zawartość listy po wykonaniu operacji przez użytkownika.
'''
def search():
    keyword=input('Wprowadź nazwę elementu: ')
    if country.count(keyword): print('--------Element znajduje się na liście--------')
    else: print('--------Nie ma takiego elementu--------')

country=['You Proof', '5 Foot 9', 'Half Of Me', 'Country Roads', 'Radio']

el1=input('Dodaj 1. element: ')
el2=input('Dodaj 2. element: ')
country.append(el1)
country.append(el2)

while True:
    choice=input('Wybierz opcję\n[1] Wyświetl pierwsze trzy elemenety listy\n[2] Wyświetl dodane przeze mnie elementy listy\n[3] Wyświetl zawartość listy\n[4] Wyczyść listę\n[5] Znajdź element na liście\n[6] Zakończ\nWybór: ')
    if choice=='1': print(country[0:3])
    elif choice=='2': print(country[-2:])
    elif choice=='3': print(country)
    elif choice=='4': country.clear()
    elif choice=='5': search()
    elif choice=='6': break
    print()
