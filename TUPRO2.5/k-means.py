# ---  FERO RESYANTO 1301154318 IF-39-10 ---

import numpy as np
import matplotlib.pyplot as plt
from matplotlib import style
import random
import math

style.use("ggplot")
array_train = []
array_test = []
array_data_train = [] #MEMBUAT ARRAY UNTUK MENYIMPAN DATA TRAINING
array_data_test = [] #MEMBUAT ARRAY UNTUK DATA TEST

# ---  MEMBUKA FILE DATA-TRAIN DAN MENYIMPAN KEDALAM VARIABEL ---

text_file = open("TrainsetTugas2.txt")
array_train = text_file.read().split()

i=0
while i <= (len(array_train)-1) :
    array = []
    for l in range (2) :
        array.append(float(array_train[i]))
        i+=1
    array_data_train.append(array)
array_data_train=np.array(array_data_train)
# print(array_data_train)

# MEMASUKAN DATA ARRAY KE DALAM VARIABEL UNTUK MEMBUAT SCATTER PLOT --
# x = array_data_train[:,0]
# y = array_data_train[:,1]
# plt.scatter(x,y,color='blue')
# plt.title("Persebaran Data Train")
# plt.show()

# ---  MEMBUKA FILE DATA-TEST DAN MENYIMPAN KEDALAM VARIABEL --

text_file = open("TestsetTugas2.txt")
array_test = text_file.read().split()

i=0
while i <= (len(array_test)-1) :
    array = []
    for l in range (2) :
        array.append(float(array_test[i]))
        i+=1
    array_data_test.append(array)
array_data_test=np.array(array_data_test)

# MEMASUKAN DATA ARRAY KE DALAM VARIABEL UNTUK MEMBUAT SCATTER SCATTER PLOT --
# x = array_data_test[:,0]
# y = array_data_test[:,1]
# plt.scatter(x,y,color='green')
# plt.show()

# -- MENGINISIASI RANDOM CENTROID --
centroid1 = random.choice(array_data_train)
centroid2 = random.choice(array_data_train)
centroid3 = random.choice(array_data_train)
centroid4 = random.choice(array_data_train)
centroid5 = random.choice(array_data_train)
cluster = [0 for i in range(len(array_data_train))]

# -- EUCLIDIAN DISTANCE --
# -- MELAKUKAN ALGORITMA K-MEANS SEBANYAK ITERASI --
for iterasi in range(13):
    for i in range(len(array_data_train)):
        jarak1 = math.sqrt((math.pow((centroid1[0] - array_data_train[i][0]), 2)) + (
            math.pow((centroid1[1] - array_data_train[i][1]), 2)))
        jarak2 = math.sqrt((math.pow((centroid2[0] - array_data_train[i][0]), 2)) + (
            math.pow((centroid2[1] - array_data_train[i][1]), 2)))
        jarak3 = math.sqrt((math.pow((centroid3[0] - array_data_train[i][0]), 2)) + (
            math.pow((centroid3[1] - array_data_train[i][1]), 2)))
        jarak4 = math.sqrt((math.pow((centroid4[0] - array_data_train[i][0]), 2)) + (
            math.pow((centroid4[1] - array_data_train[i][1]), 2)))
        jarak5 = math.sqrt((math.pow((centroid5[0] - array_data_train[i][0]), 2)) + (
            math.pow((centroid5[1] - array_data_train[i][1]), 2)))

        #-- MENENTUKAN MINIMUM DISTANCE --
        if jarak1 < jarak2 and jarak1 < jarak3 and jarak1 < jarak4 and jarak1 < jarak5 :
            cluster[i] = 1
        elif jarak2 < jarak1 and jarak2 < jarak3 and jarak2 < jarak4 and jarak2 < jarak5 :
            cluster[i] = 2
        elif jarak3 < jarak1 and jarak3 < jarak2 and jarak3 < jarak4 and jarak3 < jarak5 :
            cluster[i] = 3
        elif jarak4 < jarak1 and jarak4 < jarak2 and jarak4 < jarak3 and jarak4 < jarak5 :
            cluster[i] = 4
        elif jarak5 < jarak1 and jarak5 < jarak2 and jarak5 < jarak3 and jarak5 < jarak4 :
            cluster[i] = 5

        centro1 = [0.0, 0.0]
        centro2 = [0.0, 0.0]
        centro3 = [0.0, 0.0]
        centro4 = [0.0, 0.0]
        centro5 = [0.0, 0.0]
        total1 = 0
        total2 = 0
        total3 = 0
        total4 = 0
        total5 = 0

        # -- MENENTUKAN CENTROID BARU  --
        for i in range(len(array_data_train)):
            if (cluster[i] == 1):
                centro1[0] = array_data_train[i][0] + centro1[0]
                centro1[1] = array_data_train[i][1] + centro1[1]
                total1 = total1 + 1
            elif (cluster[i] == 2):
                centro2[0] = array_data_train[i][0] + centro2[0]
                centro2[1] = array_data_train[i][1] + centro2[1]
                total2 = total2 + 1
            elif (cluster[i] == 3):
                centro3[0] = array_data_train[i][0] + centro3[0]
                centro3[1] = array_data_train[i][1] + centro3[1]
                total3 = total3 + 1
            elif (cluster[i] == 4):
                centro4[0] = array_data_train[i][0] + centro4[0]
                centro4[1] = array_data_train[i][1] + centro4[1]
                total4 = total4 + 1
            elif (cluster[i] == 5):
                centro5[0] = array_data_train[i][0] + centro5[0]
                centro5[1] = array_data_train[i][1] + centro5[1]
                total5 = total5 + 1

    centro1[0] = centro1[0] / total1
    centro1[1] = centro1[1] / total1
    centro2[0] = centro2[0] / total2
    centro2[1] = centro2[1] / total2
    centro3[0] = centro3[0] / total3
    centro3[1] = centro3[1] / total3
    centro4[0] = centro4[0] / total4
    centro4[1] = centro4[1] / total4
    centro5[0] = centro5[0] / total5
    centro5[1] = centro5[1] / total5

    centroid1 = [centro1[0], centro1[1]]
    centroid2 = [centro2[0], centro2[1]]
    centroid3 = [centro3[0], centro3[1]]
    centroid4 = [centro4[0], centro4[1]]
    centroid5 = [centro5[0], centro5[1]]

print(centroid1,centroid2,centroid3,centroid4,centroid5)
#-- MENAMPILKAN HASIL ALGORITMA K-MEANS TERHADAP DATA TRAIN PADA SCATTER PLOT --
plt.scatter(array_data_train[:,0],array_data_train[:,1],c=cluster)
plt.scatter(centroid1[0],centroid1[1],c='r')
plt.scatter(centroid2[0],centroid2[1],c='r')
plt.scatter(centroid3[0],centroid3[1],c='r')
plt.scatter(centroid4[0],centroid4[1],c='r')
plt.scatter(centroid5[0],centroid5[1],c='r')
plt.title('Data Train')
plt.show()

# -- MELAKUKAN ALGORITMA K-MEANS SEBANYAK ITERASI UNTUK SETIAP DATA TEST --
cluster_test = [0 for i in range(len(array_data_test))]
for iterasi in range(13):
    for i in range(len(array_data_test)):
        jarak1 = math.sqrt((math.pow((centroid1[0] - array_data_test[i][0]), 2)) + (
            math.pow((centroid1[1] - array_data_test[i][1]), 2)))
        jarak2 = math.sqrt((math.pow((centroid2[0] - array_data_test[i][0]), 2)) + (
            math.pow((centroid2[1] - array_data_test[i][1]), 2)))
        jarak3 = math.sqrt((math.pow((centroid3[0] - array_data_test[i][0]), 2)) + (
            math.pow((centroid3[1] - array_data_test[i][1]), 2)))
        jarak4 = math.sqrt((math.pow((centroid4[0] - array_data_test[i][0]), 2)) + (
            math.pow((centroid4[1] - array_data_test[i][1]), 2)))
        jarak5 = math.sqrt((math.pow((centroid5[0] - array_data_test[i][0]), 2)) + (
            math.pow((centroid5[1] - array_data_test[i][1]), 2)))

        #-- MINIMUM DISTANCE --
        if jarak1 < jarak2 and jarak1 < jarak3 and jarak1 < jarak4 and jarak1 < jarak5 :
            cluster_test[i] = 1
        elif jarak2 < jarak1 and jarak2 < jarak3 and jarak2 < jarak4 and jarak2 < jarak5 :
            cluster_test[i] = 2
        elif jarak3 < jarak1 and jarak3 < jarak2 and jarak3 < jarak4 and jarak3 < jarak5 :
            cluster_test[i] = 3
        elif jarak4 < jarak1 and jarak4 < jarak2 and jarak4 < jarak3 and jarak4 < jarak5 :
            cluster_test[i] = 4
        elif jarak5 < jarak1 and jarak5 < jarak2 and jarak5 < jarak3 and jarak5 < jarak4 :
            cluster_test[i] = 5

#-- MENAMPILKAN HASIL ALGORITMA K-MEANS TERHADAP DATA TEST PADA SCATTER PLOT --
plt.scatter(array_data_test[:,0],array_data_test[:,1],c=cluster_test)
plt.scatter(centroid1[0],centroid1[1],c='r')
plt.scatter(centroid2[0],centroid2[1],c='r')
plt.scatter(centroid3[0],centroid3[1],c='r')
plt.scatter(centroid4[0],centroid4[1],c='r')
plt.scatter(centroid5[0],centroid5[1],c='r')
plt.title('Data Test')
plt.show()

# with open('hasil_data_test.txt', 'w') as file:
#     file.write(" -- Klaster Hasil Prediksi Data Test -- "+'\n')
#     file.write(" -- Fero Resyanto 1301154318 IF-39-10 -- "+'\n\n')
#     for loop in  range(len(array_data_test)):
#         file.write(str(array_data_test[loop])+' = '+str(cluster_test[loop])+'\n')



