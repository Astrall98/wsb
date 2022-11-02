programowanie=['Python', 'PHP', 'C#', 'JS', 'Java']
print(programowanie)
print(type(programowanie))

first=programowanie[0]
print("Pierwszy element: Potężny "+first)

threeElements=programowanie[0:3]
print("Pierwsze trzy elementy: ", threeElements)

lastElement=programowanie[-1]
print("Ostatni element: "+lastElement)

#dodanie nowego elementu na koniec listy
programowanie.append('R')
programowanie.append('Python')
print(programowanie)

#zliczanie elementu na liście
countElements=programowanie.count('Python')
print(countElements)

#zliczanie elemenów na liście
countElementsOfList=len(programowanie)
#print('Ilość elementów na liście: ',countElementsOfList)
print('Ilość elementów na liście: '+str(countElementsOfList))

#połączenie list
anotherList=['C', 'C++', 'COBOL']
programowanie.extend(anotherList)
print('Lista programowanie: '+str(programowanie))
print('Lista dodatkowa: '+str(anotherList))

#usuwanie elementów z listy
new=programowanie
print('New list: '+str(new))
new.clear()
print('New list: '+str(new))
print('Programowanie: '+str(programowanie))
