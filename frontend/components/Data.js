import { View, Text, TextInput, Button } from 'react-native'
import React from 'react'

export default function Data() {
  return (
    <View>
      <Text>Tus Datos</Text>
      <TextInput placeholder='Nomrbe'/>
      <TextInput placeholder='Apellido'/>
      <TextInput placeholder='Edad'/>
      <TextInput placeholder='Cuantos te acompañana?'/>
      <Button title='Subir'/>
    </View>
  )
}