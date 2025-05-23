import datetime
class Cuenta_Bancaria():
    def __init__(self, nombre_titular, fecha_de_apertura, numero_de_cuenta,saldo):
        self.nombre_titular = nombre_titular
        self.fecha_de_apertura = fecha_de_apertura
        self.numero_de_cuenta = numero_de_cuenta
        self.saldo = saldo
    def retirar_dinero(self, monto):
        if(self.saldo >= monto):
            self.saldo = self.saldo - monto
            return True
        else:
            print("saldo insuficiente, su saldo es de", self.saldo)
    
    def ingresar_dinero(self, monto):
        self.saldo = self.saldo + monto
    
    def transferir_dinero(self, monto, cuenta_a_transferir):
        temp = self.retirar_dinero(monto)
        if(temp==True):
            cuenta_a_transferir.ingresar_dinero(monto)
        
class Cuenta_Vip(Cuenta_Bancaria):
    def __init__(self, nombre_titular, fecha_de_apertura, numero_de_cuenta, saldo, negativo):
        super().__init__(nombre_titular, fecha_de_apertura, numero_de_cuenta, saldo)
        self.negativo = negativo
    def retirar_dinero(self, monto):
        if((self.saldo + self.negativo) >= monto):
            self.saldo = self.saldo - monto
            return True
        else:
            print("saldo insuficiente, su saldo es de", self.saldo)

class Plazo_Fijo(Cuenta_Bancaria):
    def __init__(self, nombre_titular, fecha_de_apertura, numero_de_cuenta, saldo, vencimiento):
        super().__init__(nombre_titular, fecha_de_apertura, numero_de_cuenta, saldo)
        self.vencimiento = datetime(2025,5,5) #vencimiento
    def retirar_dinero(self, monto, fecha):
        if(self.vencimiento > fecha):
            self.saldo = self.saldo - (monto +(monto * 0.05))
        else:
            self.saldo = self.saldo - monto