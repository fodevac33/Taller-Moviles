import { View, Image, StyleSheet} from 'react-native'
import React from 'react'

export default function Img() {
  return (
    <View>
      <Image 
        style={styles.tinyLogo}
        source={{
          uri: "https://media.newyorker.com/photos/646fa2f284b5528bf14b2092/master/pass/230605_r42430_rd.jpg",
        }}
      />
    </View>
  )
}

const styles = StyleSheet.create({
  container: {
    paddingTop: 50,
  },
  tinyLogo: {
    width: 200,
    height: 200,
  },
});