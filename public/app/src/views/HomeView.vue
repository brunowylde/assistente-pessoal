<template>
  <div class="container">
      <div class="flex">
      <!-- <HelloWorld msg="Welcome to Your Vue.js + TypeScript App"/> -->
      <div class="card-3">
        <div class="card text-white">
          <div class="bg-card">
            <div class="card-title text-center">
              <strong>JOGOS DE HOJE</strong>
            </div>
            <div class="w-100 text-center my-campeonato">NBA</div>
            <div class="w-100 justify-between text-center align-center">
              <span class="card-team">Lakers</span>
              <span class="card-versus">x</span>
              <span class="card-team">Warriors</span>
            </div>
            <div class="w-100 justify-between text-center align-center">
              <span class="card-team">Suns</span>
              <span class="card-versus">x</span>
              <span class="card-team">Nuggets</span>
            </div>
            <div class="w-100 justify-between text-center align-center">
              <span class="card-team">Heat</span>
              <span class="card-versus">x</span>
              <span class="card-team">Knicks</span>
            </div>
            <div class="w-100 justify-between text-center align-center">
              <span class="card-team">Celtics</span>
              <span class="card-versus">x</span>
              <span class="card-team">76ers</span>
            </div>
            <div class="w-100 text-center my-campeonato">Premier League</div>
            <div class="w-100 justify-between text-center align-center">
              <span class="card-team">Chelsea</span>
              <span class="card-versus">x</span>
              <span class="card-team">Man Utd</span>
            </div>
            <div class="w-100 justify-between text-center align-center">
              <span class="card-team">Man City</span>
              <span class="card-versus">x</span>
              <span class="card-team">Liverpool</span>
            </div>
            <div class="w-100 justify-between text-center align-center">
              <span class="card-team">Arsenal</span>
              <span class="card-versus">x</span>
              <span class="card-team">Spurs</span>
            </div>
            <div class="w-100 justify-between text-center align-center">
              <span class="card-team">Newcastle</span>
              <span class="card-versus">x</span>
              <span class="card-team">Everton</span>
            </div>
            <div class="w-100 text-center my-campeonato">Champions League</div>
            <div class="w-100 justify-between text-center align-center">
              <span class="card-team">Real Madrid</span>
              <span class="card-versus">x</span>
              <span class="card-team">Bayern de Munique</span>
            </div>
            <div class="w-100 justify-between text-center align-center">
              <span class="card-team">Barcelona</span>
              <span class="card-versus">x</span>
              <span class="card-team">Milan</span>
            </div>
          </div>
        </div>
      </div>
      <div class="card-3">
        <div class="card text-white">
          <div class="bg-card">
            <div class="card-title text-center">
              <strong>TEMPO DE HOJE</strong>
            </div>
            <div class="w-100 text-right">
              <span class="font-40">27ºC</span>
            </div>
          </div>
        </div>
      </div>
      <div class="card-3">
        <div class="card text-white">
          <div class="bg-card">
            <div class="card-title text-center">
              <strong>NOTÍCIAS DE HOJE</strong>
            </div>
            <div>
              <div class="w-100 news">
              Elon Musk decide mudar seu nome para Seu Madruga; internet repercute
              </div>
              <div class="w-100 news">
                Bolsonaro é pego com dinheiro na carteira e Partido dos Trabalhadores vai à loucura com situação
              </div>
              <div class="w-100 news">
                Palmeiras decide contratar Messi; astro nega qualquer negociação
              </div>
              <div class="w-100 news">
                Iron Maiden volta ao Brasil após 8 meses; show em SP é o primeiro a ser confirmado
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card-3">
        <div class="card text-white">
          <div class="bg-card">
            <div class="card-title text-center">
              <strong>TAREFAS DIÁRIAS</strong>
            </div>
            <div class="w-100 flex align-center">
              <input type="checkbox" id="checkbox212"/>
              <label class="margin-checkbox">Duolingo</label>
            </div>
            <div class="w-100 flex align-center">
              <input type="checkbox" id="checkbox212"/>
              <label class="margin-checkbox">Exercício Físico</label>
            </div>
            <div class="w-100 flex align-center">
              <input type="checkbox" id="checkbox212"/>
              <label class="margin-checkbox">Leitura</label>
            </div>
            <div class="w-100 flex align-center">
              <input type="checkbox" id="checkbox212"/>
              <label class="margin-checkbox">Comando de Voz</label>
            </div>
            <div class="w-100 flex align-center">
              <input type="checkbox" id="checkbox212"/>
              <label class="margin-checkbox">Chat GPT</label>
            </div>
            <div class="w-100">
              <input type="text" class="w-100" />
            </div>
          </div>
        </div>
      </div>
      <div class="card-3">
        <div class="card text-white">
          <div class="bg-card">
            <div class="card-title text-center">
              <strong>ANOTAÇÕES</strong>
            </div>
            <div class="w-100">
              <input type="text" class="w-100" />
            </div>
          </div>
        </div>
      </div>
      <div class="card-3">
        <div class="card text-white">
          <div class="bg-card">
            <div class="card-title text-center">
              <strong>TABS</strong>
            </div>
            <div class="w-100">
              <input type="text" class="w-100" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from 'vue';
// import HelloWorld from '@/components/HelloWorld.vue'; // @ is an alias to /src

export default defineComponent({
  name: 'HomeView',
  components: {
    // HelloWorld,
  },
});
</script>
