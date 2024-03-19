import { View, Text } from 'react-native'
import React from 'react'
import { createBottomTabNavigator } from '@react-navigation/bottom-tabs'
import { NavigationContainer } from '@react-navigation/native'
import { AntDesign } from '@expo/vector-icons'

import Data from './components/Data'
import Img from './components/Img'

const Tab = createBottomTabNavigator()

function MyTabs () {
  return (
    <Tab.Navigator>
      <Tab.Screen name="Datos Fiesta" component={Data}
        options={{
          tabBarIcon: ({}) => (
           <AntDesign
            name='unlock' 
            size={30}
            color={'#53CB22'}
          />
          ),
        }}
      />
      <Tab.Screen name="Fiesta" component={Img}
        options={{
          tabBarIcon: ({}) => (
           <AntDesign
            name='user' 
            size={30}
            color={'#53CB22'}
          />
          ),
        }}
      />
    </Tab.Navigator>
  )  
}

export default function Enrutamiento() {
  return (
    <NavigationContainer>
      <MyTabs />
    </NavigationContainer>
  )
}