/*
Kode program sistem rumah pintar, OMASAE
*/

#include <LiquidCrystal.h> // Library untuk LCD

const int numRows = 2; //Jumlah Baris pada LCD
const int numCols = 16; //Jumlah Kolom pada LCD
const int inPin = 0; // analog pin
const byte degreeSymbol = B11011111; //Simbol Degree
const int LED = 13; // Pin untuk LED
const int BUTTON = 7; // Pin untuk pushbutton
const int LED2 = 8; // Pin untuk LED ke 2
const int tiltSensorPin = 9; // Pin untuk sensor gerak
const int ledPin = 10; // Pin untuk LED sensor gerak
int tiltSensorPreviousValue = 0; // Nilai sensor gerak sebelumnya
int tiltSensorCurrentValue = 0; // Nilai sensor gerak saat ini
long lastTimeMoved = 0; // Nilai gerak dari sensor
int shakeTime=50; // Nilai waktu gerak
int val = 0; // value untuk menyimpan keadaan
int val2 = 0; // value untuk menyimpan keadaan
int old_val = 0; // value untuk menyimpan keadaan lama
int state = 0; // 0 = LED off and 1 = LED on
int brightness = 128; // Nilai terang lampu
unsigned long startTime = 0; // waktu tekan tombol

// Inisialisasi library dengan angka pada interface pin
LiquidCrystal lcd(12, 11, 5, 4, 3, 2);
void setup()
{
  lcd.begin(numCols, numRows); // Mulai membuat tampilan di LCD
  lcd.print("Suhu sekarang : "); // Pesan pada LCD.
  pinMode(LED, OUTPUT); // Output untuk LED
  pinMode(LED2, OUTPUT); // Output untuk LED
  pinMode(BUTTON, INPUT); // Input Button
  pinMode (tiltSensorPin, INPUT);
  digitalWrite (tiltSensorPin, HIGH);
  pinMode (ledPin, OUTPUT);
}
void loop()
{
  // Pemmbacaan sensor suhu
  lcd.setCursor(0, 1);  // Set cursor pada kolom 0, baris 1 untuk tampilan angka suhu
  temperature(); // Fungsi penghitungan suhu
  lcd.write(degreeSymbol); // Tulis simbol derajat
  lcd.print("C"); // Tulis simbol celcius
  // Pembacaan lampu
  val = digitalRead(BUTTON); // Baca nilai button
  // Pengecekan transisi
  if ((val == HIGH) && (old_val == LOW)){
    state = 1 - state;
    startTime = millis();
    delay(10);
  }
  if ((val == HIGH) && (old_val == HIGH)) {
  // Jika tombol ditekan lebih dari 500ms.
    if (state == 1 && (millis() - startTime) > 500) {
      brightness++; // increment brightness 
      delay(100); // delay untuk menghindari cahaya naik lebih cepat
      if (brightness > 255) { // 255 adalah terang maksimum
        brightness = 0; // setelah nilai 255, kembali ke 0
        }
      }
    }
  old_val = val; // Menyimpan nilai state lama
  if (state == 1) {
    analogWrite(LED, brightness); // turn LED ON at the
      // current brightness level
    } else {
      analogWrite(LED, 0); // turn LED OFF
    }
  // Pembacaan sensor cahaya  
  val2 = analogRead(0);  
  analogWrite(LED2, val/4);
  delay(10);
  // Pembacaan sensor gerak
  tiltSensorCurrentValue=digitalRead(tiltSensorPin);
  if (tiltSensorPreviousValue != tiltSensorCurrentValue){
    lastTimeMoved = millis();
    tiltSensorPreviousValue = tiltSensorCurrentValue;
  }
  if (millis() - lastTimeMoved < shakeTime){
    digitalWrite(ledPin, HIGH);
  }
  else{
    digitalWrite(ledPin, LOW);
  }
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
