long int data;
 
int LED1 = 4; // Led connected
int LED2 = 5;
long int password1 = 1;// light on
long int password2 = 0; // light off
 
char state = 0;
 
 
void setup()
{
   
pinMode(LED1, OUTPUT); 
pinMode(LED2, OUTPUT);
digitalWrite(LED1, LOW);
digitalWrite(LED2, LOW);
Serial.begin(9600);

 
}
 
void loop()
{
 
  while(Serial.available()==0) ;
 
 if(Serial.available()>0) 
{
data = Serial.parseInt();
Serial.println(data);
 
} 

 
if (data == password1)
{
  
  digitalWrite(LED1,HIGH);
  digitalWrite(LED2,HIGH);
  Serial.println("LED ON ");
  
   }
   
   if( data == password2)
   {
       digitalWrite(LED1,LOW);
       digitalWrite(LED2,LOW);
       Serial.println("LED OFF");
   }
 
 }
