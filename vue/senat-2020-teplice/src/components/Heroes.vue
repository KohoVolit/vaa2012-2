<template>
    <div class="">
        <div class="container alert alert-success">
            <h1 class="p-4"><font-awesome-icon icon="heart" class="text-danger" /> <small> {{ t['supported'] }}</small>
            </h1>
            <div class="d-flex flex-row flex-wrap justify-content-around">
                <div v-for="(supporter, index) in supporters" :key="index" class="card p-2 m-2" :class="bgClass(supporter.date)">
                    <h6 :class="textClass(supporter.date)">{{ supporter['given_name'] }} {{ supporter['family_name'] }}</h6>
                </div>
            </div>
            <div class="mt-5">
                <a :href="url_darujme" target="_blank"><h4 class="outlink">{{ t['support'] }}</h4></a>
            </div>
        </div>
    </div>
</template>
<script>
import settings from '../settings.json'
import t from "../locales/components/Darujme.json"
import { library } from '@fortawesome/fontawesome-svg-core'
import { faHeart } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

library.add(faHeart)



export default {
    data: function () {
        return {
            t,
            supporters: [],
            url_darujme: ''
        }
    },
    mounted () {
        var $this = this
        this.url_darujme = settings['url_darujme']
        fetch (settings['api_darujme'])
        .then(function (response) {
            return response.json()
        })
        .then(function (response) {
            let blackList = [
                {"given_name": "Bozikova", "family_name": "Gabriela"},
                {"given_name": "Anonymny", "family_name": "darca"}
            ]
            $this.$data.supporters = response.reverse().filter( function (item) {
                blackList.forEach(black => {
                    if ((black["given_name"] == item['given_name']) && (black["family_name"] == item["family_name"])) {
                        item['given_name'] = '💜'
                        item["family_name"] = '❤'
                    }
                })
                return item.last
            })
        })
    },
    methods: {
        diffDays: function (a, b) {
            return Math.ceil(Math.abs(a - b) / (1000 * 3600 * 24))
        },
        bgClass: function(isoDate) {
            var aa = Date.parse(isoDate)
            var b = new Date()
            var bb = b.getTime()
            if (this.diffDays(aa, bb) > 540) {
                return "bg-light"
            } else {
                if (this.diffDays(aa, bb) > 270) {
                    return "bg-secondary"
                } else {
                    return "bg-warning"
                }
            }
        }
        ,
        textClass: function(isoDate) {
            var aa = Date.parse(isoDate)
            var b = new Date()
            var bb = b.getTime()
            if (this.diffDays(aa, bb) > 540) {
                return "text-secondary"
            } else {
                if (this.diffDays(aa, bb) > 270) {
                    return "text-light"
                } else {
                    return "text-dark"
                }
            }
        }
    },
    components: {
        'font-awesome-icon': FontAwesomeIcon
    }
}
</script>

<style scoped>
    .outlink {
        text-decoration: underline;
    }
</style>
