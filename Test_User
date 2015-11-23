from flask import Flask
import unittest

class User (unittest.TestCase):
	name = "Test_de_Prueba"
	id = "test_id1"
	email = "test@gmail.es"
	
	def get_name_test(self):
        self.assertEqual(self.name, "Test_de_Prueba")

        return self.name

    def get_id_test(self):
        self.assertEqual(self.id, "test_id1")

        return self.id

    def get_email_test(self):
        self.assertEqual(self.email,"test@gmail.es")

        return self.email

    def login_test(self,id="test_id1",password="123456"):
        self.assertEqual(id,"test_id1")
        self.assertEqual(password,"123456")

        return True

    def get_gender_test(self):
        gender = "male"

        self.assertEqual(gender,"male")

        return gender

