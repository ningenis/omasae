/*
Kode program sistem rumah pintar, OMASAE
*/

#include <LiquidCrystal.h> // Library untuk LCD

const int numRows = 2; //Jumlah Baris pada LCD
const int numCols = 16; //Jumlah Kolom pada LCD
const int inPin = 0; // analog pin
const byte degreeSymbol = B11011111; //Simbol Degree

// Inisialisasi library dengan angka pada interface pin
LiquidCrystal lcd(12, 11, 5, 4, 3, 2);
void setup()
{
  lcd.begin(numCols, numRows); // Mulai membuat tampilan di LCD
  lcd.print("Suhu sekarang : "); // Pesan pada LCD.
}
void loop()
{
  lcd.setCursor(0, 1);  // Set cursor pada kolom 0, baris 1 untuk tampilan angka suhu
  temperature(); // Fungsi penghitungan suhu
  lcd.write(degreeSymbol); // Tulis simbol derajat
  lcd.print("C"); // Tulis simbol celcius
}

//Fungsi Penghitungan suhu
void temperature()
{
  int value = analogRead(inPin); // Menerima nilai dari sensor suhu
  float millivolts = (value / 1024.0) * 5000; // Konversi nilai analog sensor ke tegangan
  float celsius = millivolts / 10; // Sensor output = 10mV per degree Celsius
  float calibrated = celsius + 0.16981663; // Rumus kalibrasi (menggunakan regresi linear)
  lcd.print(calibrated); // Tampilkan angka suhu pada LCD
  delay(1000); // Tunggu 1 detik untuk menampilkan pembacaan terbaru
}
