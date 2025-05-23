fileCSV = open("frecunecia_cardiaca.csv", "r")
datos_pacientes = fileCSV.readlines()
print(datos_pacientes)

fileCSV.close()

count = 0
acum = 0
f_max = 0
f_media31 = 0
f_total = []

for paciente in datos_pacientes:
    valores = paciente.split(";")
    edad = int(valores[0])
    fr1 = int(valores[1])
    fr2 = int(valores[2])
    f_media = (fr1 + fr2) / 2
    f_total.append(f_media)
    if edad >= 31:
        count = count + 1
        acum = acum + f_media
        if f_max < fr1:
            f_max = fr1
        elif f_max < fr2:
            f_max = fr2
            pass
        pass

f_media31 = acum / count
filetxt = open("resultados.txt", "w")
filetxt.writelines(f"Las frecuencias medias fueron:{f_total}\n")
filetxt.write(f"La frecuencia media es: {f_media31}\n")
filetxt.write(f"La frecuencia max fue: {f_max}\n")
filetxt.close()