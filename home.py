from kivy.app import App
from kivymd.app import MDApp

from kivy.properties import ObjectProperty
from kivy.lang import Builder

import urllib.request, json

from kivy.uix.widget import Widget
from kivy.uix.screenmanager import ScreenManager, Screen

from kivy.uix.boxlayout import BoxLayout
from kivymd.uix.boxlayout import MDBoxLayout



def cekLogin(username, password):
    with urllib.request.urlopen("http://localhost/pkm/Api_FIX_all.php?auth=888&perintah=login&username="+username+"&password="+password) as json_url:
        data = json.loads(json_url.read())
        usernameTabel = data[0]["username"]
        passwordTabel = data[0]["password"]

        #root.manager.current = 'Beranda'
        if username==usernameTabel and password==passwordTabel:
            #print("Login Berhasil")
            data=1
        else:
            #print("login gagal")
            data=0

    return data

def SaveSignUp(username_SU, password_SU):
    with urllib.request.urlopen("http://localhost/pkm/Api_FIX_all.php?auth=888&perintah=insertpgn&username="+username_SU+"&password="+password_SU) as json_url:
        data = json.loads(json_url.read())
        usernameTabel = data[0]["username"]
        passwordTabel = data[0]["password"]

        if username==usernameTabel and password==passwordTabel:
            data=1
        else:
            data=0

    return data

def SaveAdmin(username_AD, password_AD):
    with urllib.request.urlopen("http://localhost/pkm/Api_FIX_all.php?auth=888&perintah=insertadmin&username="+username_AD+"&password="+password_AD) as json_url:
        data = json.loads(json_url.read())
        usernameTabel = data[0]["username"]
        passwordTabel = data[0]["password"]

        if username==usernameTabel and password==passwordTabel:
            data=1
        else:
            data=0

    return data

def Produk(nama, harga):
    with urllib.request.urlopen("http://localhost/pkm/Api_FIX_all.php?auth=888&perintah=insertprdk&nama_produk="+nama+"&harga="+harga)as json_url:
        data = json.loads(json_url.read())
        namaTabel = data[0]["nama_produk"]
        hargaTabel = data[0]["harga"]

        if nama_produk==namaTabel and harga==hargaTabel:
            data=1
        else:
            data=0
    return data

def Kontak(namak, email, kritik):
    with urllib.request.urlopen("http://localhost/pkm/Api_FIX_all.php?auth=888&perintah=insertkt&nama="+namak+"&email="+email+"&kritik="+kritik)as json_url:
        data = json.loads(json_url.read())
        namakTabel = data[0]["nama"]
        emailTabel = data[0]["email"]
        kritikTabel = data[0]["kritik"]

    return data

def Transaksi(idt, user, idp, hargat, jumlah):
    with urllib.request.urlopen("http://localhost/pkm/Api_FIX_all.php?auth=888&perintah=insert&id_transaksi="+idt+"&username="+user+"&id_produk="+idp+"&harga="+hargat+"&jumlah="+jumlah)as json_url:
        data = json.loads(json_url.read())
        idtTabel = data[0]["id_transaksi"]
        userlTabel = data[0]["username"]
        idpTabel = data[0]["id_produk"]
        hargaTabel = data[0]["harga"]
        jumlahTabel = data[0]["jumlah"]


    return data

class LoginScreen(Screen):
    def doLogin(self):
        #print("Halooo")
        if cekLogin(self.txtUsername_.text,self.txtPassword_.text) == 1:
            print("masuk ke menu")
            self.manager.current = 'Beranda'


class HomeScreen(Screen):
   pass
        
class SignupScreen(Screen):
    def doSaveSignUp(self):
        SaveSignUp(self.txtUsername_SU.text, self.txtPassword_SU.text)

class ProdukScreen(Screen):
    def doProduk(self):
        Produk(self.txtnama_P.text, self.txtharga_P.text)    

class KontakScreen(Screen):
    def doKontak(self):
        Kontak(self.txtnama_K.text, self.txtemail_K.text, self.txtkritik_k.text)
   
class TransaksiScreen(Screen):
    def doTransaksi(self):
        Transaksi(self.txtidt_.text, self.txtuser_.text, self.txtidp_.text, self.txtharga_.text, self.txtjumlah_.text)

class AdminScreen(Screen):
    def doSaveAdmin(self):
        SaveAdmin(self.txtUsername_AD.text, self.txtPassword_AD.text)


# penamaan class harus sama dengan file kv
# sim.kv
# nama class WAJIB SimApp
class SimApp(MDApp):
    pass
if __name__ == '__main__':
     def build(self):
        self.theme_cls.primary_palette = "Blue"
SimApp().run()