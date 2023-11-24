<template>

  <main v-if="gameOver">
    <h1>Thanks for playing!</h1>
    <h2 class="win" v-if="guessedRight">You won!</h2>
    <h2 class="lose" v-else>Next time.</h2>
  </main>

  <main v-else> 
    <h1>Wordle</h1>
    <form @submit.prevent="submit">
      <div class="currentGuess">
        <input type="text" maxlength=1 v-model="guess.letter1" class="letter">
        <input type="text" maxlength=1 v-model="guess.letter2" class="letter">
        <input type="text" maxlength=1 v-model="guess.letter3" class="letter">
        <input type="text" maxlength=1 v-model="guess.letter4" class="letter">
        <input type="text" maxlength=1 v-model="guess.letter5" class="letter">
      </div>

      <button type="submit" :disabled="submitEnabled">Submit</button>
    </form>

    <output>
      <div class="priorGuess" v-for="guess in priorGuesses">
        <div v-for="item in guess.result" class="letter" :class="item.score">{{item.guess}}</div>
      </div>
    </output>
  </main>

</template>

<script setup>
  import {ref, reactive, computed} from "vue";
  console.clear();
  const gameOver = ref(false);
  
  //ANSWER VARIABLES
  const answer = ref("artsy");
  const answerArray = answer.value.split('');
  
  //GUESS VARIABLES
  const guessCounter = ref(0);
  const priorGuesses = ref([]);
  const guess = reactive({
    letter1: null,
    letter2: null,
    letter3: null,
    letter4: null,
    letter5: null
  }); 
  const guessArray = computed( function() {
    return [guess.letter1, guess.letter2, guess.letter3, guess.letter4, guess.letter5];
  })

  //SUBMIT BUTTON
  const submitEnabled = computed( function() {
    if (guess.letter1 && guess.letter2 && guess.letter3 && guess.letter4 && guess.letter5) {
      return false;
    } else {
      return true;
    }
  });
  
  /*********  FUNCTIONS *********/
  function submit() {
    saveGuess();
    checkIfGameOver();
    guessedRight();
    clearInputs();
  }
  
  function clearInputs() {
    guess.letter1 = "";
    guess.letter2 = "";
    guess.letter3 = "";
    guess.letter4 = "";
    guess.letter5 = "";
  }
  
  function checkIfGameOver() {
    if (guessedRight() || guessCounter.value === 6) {
      gameOver.value = true;
    }
  }
  
  function guessedRight() {
    const guessArray =  Object.values(guess);
    const guessValue = guessArray.join("") 
    
    if (answer.value === guessValue) {
      return true;
    } else {
      return false;
    }
  }
    
  function saveGuess() {
    priorGuesses.value.push(
      {guessNumber: guessCounter.value++, result: scoreCounter.value}
    );
  }
  
  const scoreCounter = computed( function() {

    return answerArray.map( function(item, index) {
      const answerLetter = item;
      const guessLetter = guessArray.value[index];
      
      function getScore(answerLetter, guessLetter) {
        if (guessLetter === answerLetter) {
          return "correct";
        } else if (answerArray.includes(guessLetter)) {
          return "partial";
        } else {
          return "";
        }
      } //END getScore() 
  
      return {
        letter: index + 1,
        answer: answerLetter,
        guess: guessLetter,
        score: getScore(answerLetter, guessLetter)
      }; //end creation of letter, answer, guess, score object
    }); //end answerArray.map function 
  
  }); // end scoreCounter

  /***** PSEUDO-CODE *****/
  // user enters guess -- DONE
  // upon submit, display version of guess below
    // for each letter, mark it black, yellow or green
    // be able to handle duplicate letters -- DIDN'T DO THIS
  // if answer incorrect AND guessCounter < 6, let them guess again
  // if correct OR if guessNumber = 6, end game
  // show button to play again, which sets answer = a different word
  
</script>

<!-- Use preprocessors via the lang attribute! e.g. <style lang="scss"> -->
<style lang="scss">
  body {
    background-color: #121213;
    
    & * {
      color: white;
      font-family: serif;
      // border: 2px solid red;
    }
  }
  
  main {
    max-width: 500px;
    margin: 0 auto;
    padding: 20px;
    display: grid;
    place-items: center;
  }
  
  h1 {
    font-size: 60px;
  }
  
  .currentGuess {
    display: flex;
    gap: 10px;
  }
  
  output {
    display: grid;
    gap: 10px;
    margin-top: 20px;
  }
  
  form {
    display: grid;
    gap: 10px;
    padding: 10px;
  }
  
  input[class="letter"], .priorGuess > * {
    font-size: 40px;
    text-align: center;
    font-weight: 700;
    color: #FFFFFF;
    text-transform: uppercase;
    
    width: 2ch;
    padding: 10px;
    background-color: #3A3A3C;
    border: 2px solid #3A3A3C;
    border-radius: 5px;
    
    &:focus {
      outline: 2px solid #7575D3; 
    }
  }
  
  .priorGuess {
    display: flex;
    gap: 10px;
    
    .letter {
      // use this to animate the reveals: https://codepen.io/kanishkkunal/pen/wgEBgX?editors=0110   
      &.correct {
        background-color: #538D4E;
        border: 2px solid #538D4E;
      }

      &.partial {
        background-color: #B59F3B;
        border: 2px solid #B59F3B;
      }
      
    }
  }
  
  button {
    margin-top: 20px;
    padding: 10px;
    width: 150px;
    font-size: 24px;
    font-weight: 700;
    background-color: hsl(35, 100%, 60%);
    color: hsl(0, 0%, 100%);
    border: none;
    border-radius: 5px;
    place-self: center;
    
    &:disabled {
      background-color: hsla(35, 100%, 80%, 0.5);
      color: hsla(0, 0%, 100%, 0.5);
    }
    
    &:active {
      background-color: #538D4E;
    }
    
    &:focus {
      outline: 2px solid #5A5AEE;
    }
    
  }

</style>