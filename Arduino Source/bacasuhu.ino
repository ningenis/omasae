
#ifndef SERIAL_RATE
#define SERIAL_RATE         115200
#endif

#ifndef SERIAL_TIMEOUT
#define SERIAL_TIMEOUT      5
#endif

void setup() {
    Serial.begin(SERIAL_RATE);
    Serial.setTimeout(SERIAL_TIMEOUT);

    // int cmd = readData();
    //for (int i = 0; i < cmd; i++) {
    //    pinMode(readData(), OUTPUT);
    //}
}

void loop() {
    int value = analogRead(0);
    
    /* Angka 1024 muncul dari 2^10 yaitu tingkat presisi
     * yang dimiliki Arduino ADC (analog to digital converter).
     * Dan angka 5000 adalah milivolts maksimal dari LM35
     */
    float millivolts = (value / 1024.0) * 5000;

    /* Keluaran dari sensor adalah 10 milivolt per derajat celsius.
     * Oleh karena itu untuk mendapatkan celsius, tinggal kita bagi
     * 10 tegangannya
     */
    float celsius = millivolts / 10; 
    Serial.print("suhu:");
    Serial.println(celsius);
    delay(1000);
}

char readData() {
    Serial.println("w");
    while(1) {
        if(Serial.available() > 0) {
            return Serial.parseInt();
        }
    }
}

