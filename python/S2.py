def permutacion(list,s):
    if list ==1:
        return s
    else:
        return [
            y+x
            for y in permutacion(1,s)
            for x in permutacion(list-1,s)
        ]
print(permutacion(3,["a","b","c"]))
print("---------------------------------------------------------")
print(permutacion(4,["a","b","c"]))
print("---------------------------------------------------------")
print(permutacion(5,["a","b","c"]))
print("---------------------------------------------------------")
print(permutacion(6,["a","b","c"]))