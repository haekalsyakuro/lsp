def garis ():
    print("====================")

# Input Nilai
a = int(input("Nilai A : "))
b = int(input("Nilai B : "))
c = int(input("Nilai C : "))
d = int(input("Nilai D : "))
e = int(input("Nilai E : "))

# Urutin semua nya
urut = [a,b,c,d,e]
asc = sorted(urut)
des = sorted(urut, reverse=True)

# Max Min Rata Rata
jumlah = a+b+c+d+e
max = max(a,b,c,d,e)
min = min(a,b,c,d,e)
rata = jumlah / len(urut)

# Output
print ("Urutan Nilai Ascending : ", asc)
print ("Urutan Nilai Descending : ", des)
print ("Nilai MAX : ", max)
print ("Nilai MIN : ", min)
print ("Nilai RATA-RATA : ", int(rata))
